<?php
/**
 * Instagram Export
 *
 * Exports all items on an Instagram profile to JSON.
 *
 * PHP version 7.1.3
 *
 * @category InstagramExport
 * @package  InstagramExport
 * @author   Wahyu Arif Purnomo <warifp@gmail.com>
 * @license  MIT License 
 * @link     https://github.com/warifp
 */

echo "Username : ";
$username = trim(fgets(STDIN));
echo "Password : ";
$password = trim(fgets(STDIN));
echo "Target   : ";
$exportedAccount = trim(fgets(STDIN));