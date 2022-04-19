<?php

namespace FileUtil;

use ExecWithFallback\ExecWithFallback;
use FileUtil\FileExists;

/**
 * A fileExist implementation using exec()
 *
 * @package    FileUtil
 * @author     Bjørn Rosell <it@rosell.dk>
 */
class FileExistsUsingExec
{

    /**
     * A fileExist based on an exec call.
     *
     * @throws \Exception  If exec cannot be called
     * @return boolean|null  True if file exists. False if it doesn't.
     */
    public static function fileExists($path)
    {
        if (!ExecWithFallback::anyAvailable()) {
            throw new \Exception(
                'cannot determine if file exists using exec() or similar - the function is unavailable'
            );
        }

        // Lets try to find out by executing "ls path/to/cwebp"
        ExecWithFallback::exec('ls ' . $path, $output, $returnCode);
        if (($returnCode == 0) && (isset($output[0]))) {
            return true;
        }

        // We assume that "ls" command is general available!
        // As that failed, we can conclude the file does not exist.
        return false;
    }

    /**
     * A fileExist doing the best it can.
     *
     * @throws \Exception  If it cannot be determined if the file exists
     * @return boolean|null  True if file exists. False if it doesn't.
     */
    public static function fileExistsTryHarder($path)
    {
        try {
            $result = FileExists::fileExists($path);
        } catch (\Exception $e) {
            try {
                $result = self::fileExistsUsingExec($path);
            } catch (\Exception $e) {
                throw new \Exception('Cannot determine if file exists or not');
            } catch (\Throwable $e) {
                throw new \Exception('Cannot determine if file exists or not');
            }
        }
        return $result;
    }
}
