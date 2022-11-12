#!/usr/bin/perl


use strict;
use warnings;
use DBI;

our $dbh    = DBI->connect("dbi:mysql:database=iitk;host=webhome","elabApp","qwertasdfgzxcvb", {'RaiseError' => 1} )|| die "Database connection not made $DBI::errstr";

my $hostname = "localhost";my $username = "root";   my $password = "";		     my $db_sel   = "otrs";
our $dbh1    = DBI->connect("dbi:mysql:database=$db_sel;host=$hostname","$username","$password", {'RaiseError' => 1} )|| die "Database connection not made $DBI::errstr";
