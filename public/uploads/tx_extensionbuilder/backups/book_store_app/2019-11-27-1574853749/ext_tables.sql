#
# Table structure for table 'tx_bookstoreapp_domain_model_book'
#
CREATE TABLE tx_bookstoreapp_domain_model_book (

	isbn varchar(255) DEFAULT '' NOT NULL,
	title varchar(255) DEFAULT '' NOT NULL,
	blurb text,
	description text,
	price double(11,2) DEFAULT '0.00' NOT NULL,
	pages int(11) DEFAULT '0' NOT NULL,
	images int(11) unsigned DEFAULT '0' NOT NULL,
	topics text NOT NULL,
	authors text NOT NULL,
	publisher int(11) unsigned DEFAULT '0'

);

#
# Table structure for table 'tx_bookstoreapp_domain_model_topic'
#
CREATE TABLE tx_bookstoreapp_domain_model_topic (

);

#
# Table structure for table 'tx_bookstoreapp_domain_model_author'
#
CREATE TABLE tx_bookstoreapp_domain_model_author (

);

#
# Table structure for table 'tx_bookstoreapp_domain_model_publisher'
#
CREATE TABLE tx_bookstoreapp_domain_model_publisher (

);

#
# Table structure for table 'tx_bookstoreapp_domain_model_country'
#
CREATE TABLE tx_bookstoreapp_domain_model_country (

);
