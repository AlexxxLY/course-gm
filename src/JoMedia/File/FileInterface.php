<?php
/**
 * @author Ivan Dmytrenko <ivan.dmytrenko.ua@gmail.com>
 */

namespace JoMedia\File;

interface FileInterface
{
    /**
     * Gets the full statistics of a file
     * 
     * @return array Use statistics for methods implementation that placed below
     */
    public function getFileStatistics();

    /**
     * Gets file size.
     *
     * @return double Returns the size of the file in kilobytes.
     */
    public function getSize();

    /**
     * Gets file permissions.
     * Little Tip: Use [mode] value from fileStatistics Array
     *
     * @return string Returns a file permissions as letters (e.g. -rwxrw-r--).
     */
    public function getPerms();

    /**
     * Gets last access time of a file
     *
     * @return string Returns last access time of file in (30.12.2015 10:15:59) format
     */
    public function getLastAccessTime();
}
