# basil-proxy
Basil is a Proxy Web application for Digital Signage SMIL Player

## Description
Sometimes you want to use several SMIL-Player in a internal network which shares same or partialy same content. 
If you want to save bandwith or it is limited you can use basil-Proxy.
Basil-proxy is created without a framework and do not need a database. It should run even on small IoT devices.

##Requirements
* PHP 5.6+
* php-curl
* Webserver (Apache, nginx etc)
* To use full possible caching capabilities the corresponding Digital Signage CMS should create additional md5 files for every media

##Theoretical concept:
Basil-Proxy acts as an intermediary between SMIL players and a Digital Signage CMS.

The player are connecting/registering with Basil-Proxy.
Basil-Proxy connects via cronjob with the CMS, downloads the SMIL-Indexes for all registered player and selects which media must be downloaded.
It can help to reduce bandwith.

##Currently Implemented Features
* registering of SMIL Player
* testing environment
* downloading SMIL-Index from Basil-Proxy
* downloading of SMIL-Index from CMS

##ToDo Features
* parsing SMIL
* check and download media and firmware updates if neccesary


##Status
Basil-Proxy is in a early stage and yet not feature complete.
