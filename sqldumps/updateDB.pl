#!/usr/bin/perl

$sqlUserPass = ' -u cf -ppassword ';
$DbDump = '/vagrant/sqldumps/dump.sql';

# check if the main DB already exists and load it otherwise
$tableExists = `mysql $sqlUserPass -e  "SELECT count(*)  FROM information_schema.tables  WHERE table_schema = 'cf'  AND table_name = 'messages';"| tail -1`;
chomp $tableExists;
if ($tableExists == 0) {
    `mysql $sqlUserPass cf < $DbDump`
}
