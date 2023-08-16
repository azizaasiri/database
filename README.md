# database

To establish a database connection, these codes were used:
```
$servername = "localhost";
$username = "rooot" ;
$password = "root";
$dbname = "saave";
```

To establish a connection to the database:
```
$conn = new mysqli(localhost,rooot, root, saave);
```

SQL query to retrieve the stored value:
```
$sql = "SELECT GET FROM saave";
$result = $conn->query($sql);
```

To close the database connection:
```
$conn->close();
```
