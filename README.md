# Ellis Immersun

## Installation

### Install Composer
```shell
curl -sS https://getcomposer.org/installer | php
```

#### Define variables
Create a `.env` file in the root of the git repository
```shell
touch .env
```

Add the following to the file, replacing the placeholders with your data and save:
```shell
SERIAL_NO=<device serial no>
USER_ID=<immsersun id>
PASSWORD=<immsersun password>
```

### Web server
Create a new site on your server and point it to `<filelocation>/public`

## Local Testing
To test locally, `cd` to folder you copied the git repo to and run:
```shell
php public/index.php
```
