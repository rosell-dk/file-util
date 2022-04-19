# File Util

Just a bunch of handy methods for dealing with files and paths:


- *FileExists::fileExists($path)*:\
A well-behaved version of *file_exists* that throws upon failure rather than emitting a warning

- *PathValidator::checkPath($path)*:\
Check if path looks valid and doesn't contain suspecious patterns

- *PathValidator::checkFilePathIsRegularFile($path)*:\
Check if path points to a regular file (and doesnt match suspecious patterns)
