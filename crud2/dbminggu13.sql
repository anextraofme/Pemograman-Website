--
-- Database: 'dbminggu13'
--

-- ------------------------------

--
-- struktur dari tabel :'bljr_login'
--

CREATE TABLE 'bljr_login' (
    'id' int (11) NOT NULL,
    'username' varchar(255) NOT NULL,
    'password' varchar(255) NOT NULL
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'bljr_login'
--

INSERT INTO 'bljr_login' ('id', 'username', 'password') VALUES
(1, 'Lia', 'lolipop123'),
(2, 'Sabila', 'terogong74'),
(3, 'Beti', 'lalalisa'),
(4, 'RV', 'koreakeun');
