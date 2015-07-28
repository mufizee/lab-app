#!/usr/bin/perl

use warnings;
use strict;
use XML::Simple;
use DBI;

my $dbh = DBI->connect('DBI:mysql:eyeclinic','root','')
	or die DBI->errstr;
	
# Get an array of hashes
my $recs = $dbh->selectall_arrayref('SELECT * FROM patients',{ Columns => {} });

# Convert to XML where each hash element becomes an XML element
my $xml = XMLout( {record => $recs}, NoAttr => 1 );
print $xml;
$dbh->disconnect;