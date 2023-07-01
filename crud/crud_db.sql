--
-- Database: 'crud'
--

-- ------------------------------

--
-- struktur dari tabel :'users'
--

CREATE TABLE USERS (
    'id' int (11)  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    'name' VARCHAR(100)  NOT NULL,
    'email' VARCHAR(100)  NOT NULL,
    'mobile' VARCHAR (15)  NOT NULL
 ); 
--
-- Dumping data for table 'users'
--

INSERT INTO USERS ('id','name', 'email', 'mobile') VALUES
('Lia', 'lolipop123', 'ss'),
('Sabila', 'terogong74', 'ss'),
('Beti', 'lalalisa', 'ss'),
('RV', 'koreakeun', 'ss');