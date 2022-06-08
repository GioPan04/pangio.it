# [pangio.it](https://pangio.it/)

My personal website built with [Laravel](https://github.com/laravel/laravel) and [TailwindCSS](https://github.com/tailwindlabs/tailwindcss).

## Screenshot
![image](https://user-images.githubusercontent.com/29762826/172615001-af56ab5b-8363-4a46-bc2d-921ecd3c8729.png)


## Development
To get started with development just clone this repo and run the followings commands:
### Bare metal way
**PHP 8 or later is required**

- Install JS dependencies: `yarn`
- Install PHP dependencies: `composer install`
- Compile the assets: `yarn watch`

### Docker way
- Start the docker images: `sail up -d`
- Install JS dependencies: `sail yarn`
- Install PHP dependencies: `sail composer install`
- Compile the assets: `sail yarn watch`
