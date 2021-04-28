## OAuth Demo

This app shows the basic implementation of the OAuth authentication with a service provider and get data.

## Installation

Prerequisite:

1. [Docker Desktop](https://www.docker.com/products/docker-desktop)
2. [Dropbox App](https://www.dropbox.com/developers/apps?_tk=pilot_lp&_ad=topbar4&_camp=myapps)

Download and install Docker Desktop (If Windows install [WSL2](https://docs.microsoft.com/en-us/windows/wsl/install-win10) and Ubuntu)
Go to the Dropbox developer site and create a new App. Get client ID and Secret.

Clone this Repo:

``git clone git@github.com:MS21917202/oauth-submission.git``

``docker run --rm -v $(pwd):/app composer install``

``cp .env.example .env``

``./vendor/bin/sail up -d``

``./vendor/bin/sail artisan key:gen``

Open the .env file and update Dropbox client id and secret from Dropbox app.

DROPBOX_CLIENT_ID=

DROPBOX_CLIENT_SECRET=

Open your browser and point to [http://localhost](http://localhost)
