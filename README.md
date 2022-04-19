# File Util

Just a bunch of handy methods for dealing with files and paths:


*FileExists::fileExists($path)*:
A well-behaved version of *file_exists* that throws upon failure rather than emitting a warning


*PathValidator::checkPath($path)*:
Throws an exception if path looks evil
