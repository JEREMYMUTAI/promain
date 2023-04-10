const mysql = require('mysql');

const connection = mysql.createConnection({
  host: 'localhost',
  user: 'jeimutai@gmail.com',
  password: '34082908JERRY'
});

connection.connect((error) => {
  if (error) {
    console.error('Error connecting to MySQL database: ', error);
    return;
  }

  console.log('Connected to MySQL database successfully!');

  connection.query('CREATE DATABASE your_database_name', (error, result) => {
    if (error) {
      console.error('Error creating database: ', error);
      return;
    }

    console.log('Database created successfully!');
  });
});

connection.end();

