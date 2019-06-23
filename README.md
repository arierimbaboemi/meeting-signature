# Meeting Signature

Simple Digital Signature for meeting attendance Aplications build with Codeigniter 3.1.10 and JQuery Signature Pad

## Features

- Create Event of Meeting
- Add Participants and draw signature
- View list of participants

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisities

- PHP >= 5.6
- MySQL

### Installing

1. Clone this repo

2. Install dependency

   ```
   composer install
   ```

3. Setup Database

4. Setup Aplications

Setup Migrations
```
vendor/bin/phinx init
```

Edit phinx.yml to match your database credentials.

Migrate the table to database
```
vendor/bin/phinx migrate
```

## Todo

- Meeting Attendance Report

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## Authors

* **Ari Wibowo** - *Initial work* - [arierimbaboemi](https://github.com/arierimbaboemi)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the GNU GENERAL PUBLIC LICENSE - see the [LICENSE.md](LICENSE.md) file for details
