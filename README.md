# File Util

[![Build Status](https://github.com/rosell-dk/file-util/actions/workflows/php.yml/badge.svg)](https://github.com/rosell-dk/file-util/actions/workflows/php.yml)
[![Software License](https://img.shields.io/badge/license-MIT-418677.svg)](https://github.com/rosell-dk/file-util/blob/master/LICENSE)
[![Coverage](https://img.shields.io/endpoint?url=https://little-b.it/file-util/code-coverage/coverage-badge.json)](http://little-b.it/file-util/code-coverage/coverage/index.html)

Just a bunch of handy methods for dealing with files and paths:


- *FileExists::fileExists($path)*:\
A well-behaved version of *file_exists* that throws upon failure rather than emitting a warning

- *PathValidator::checkPath($path)*:\
Check if path looks valid and doesn't contain suspecious patterns

- *PathValidator::checkFilePathIsRegularFile($path)*:\
Check if path points to a regular file (and doesnt match suspecious patterns)
