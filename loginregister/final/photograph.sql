-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 09:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finall`
--

-- --------------------------------------------------------

--
-- Table structure for table `photograph`
--

CREATE TABLE `photograph` (
  `Photograph` text DEFAULT NULL,
  `Image` text DEFAULT NULL,
  `Artist` text DEFAULT NULL,
  `Photograph Profile` text DEFAULT NULL,
  `Notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photograph`
--

INSERT INTO `photograph` (`Photograph`, `Image`, `Artist`, `Photograph Profile`, `Notes`) VALUES
('99 Cent II Diptychon', 'http://upload.wikimedia.org/wikipedia/en/b/bc/99_cent_II%2C_diptychon_-_Photo_courtesy_of_Sotheby%27s.jpg', 'Andreas Gursky', 'http://en.wikipedia.org/wiki/99_Cent_II_Diptychon', 'A second print of 99 Cent II Diptychon sold for $2.48 million in November 2006 at a New York gallery, and a third print sold for $2.25 million at Sotheby\'s in May 2006.'),
('Andy Warhol', 'http://media-cache-ak0.pinimg.com/originals/01/2e/78/012e786d529a1055379736c345204e2a.jpg', 'Robert Mapplethorpe', '-', '-'),
('Billy the Kid (1879â€“80) tintype portrait', 'http://upload.wikimedia.org/wikipedia/commons/c/c2/Billy_the_Kid_corrected.jpg', 'Unknown', '-', '-'),
('Dead Troops Talk (A vision after an ambush of a Red Army patrol, near Moqor, Afghanistan, winter 1986)', 'http://www.canphoto.net/wordpress/wp-content/uploads/2012/05/jeff-wall-dead-troops-talk.jpg', 'Jeff Wall', '-', '-'),
('Dovima with elephants', 'http://upload.wikimedia.org/wikipedia/commons/4/45/IMG_3432.JPG', 'Richard Avedon', 'http://en.wikipedia.org/wiki/Dovima', '-'),
('Georgia O\'Keeffe (Hands)', 'http://mikophoto.net/wordpress/wp-content/uploads/2010/11/Georgia-OKeeffe-Hands-Alfred-Stieglitz.jpg', 'Alfred Stieglitz', '-', '-'),
('Georgia O\'Keeffe Nude', 'http://1.bp.blogspot.com/-oRdG_DQfNnY/Tj-li9MF0SI/AAAAAAAAAyc/EzXaDo4L2iA/s1600/Georgia-OKeeffe-Nude-Alfred-Stieglitz.jpg', 'Alfred Stieglitz', '-', '-'),
('Joueur d\'Orgue', 'http://www.christies.com/lotfinderimages/d53042/d5304289l.jpg', 'EugÃ¨ne Atget', '-', '-'),
('Moonrise, Hernandez, New Mexico', 'http://upload.wikimedia.org/wikipedia/en/thumb/e/e3/Moonrise%2C_Hernandez%2C_New_Mexico.jpg/220px-Moonrise%2C_Hernandez%2C_New_Mexico.jpg', 'Ansel Adams', 'http://en.wikipedia.org/wiki/Moonrise,_Hernandez,_New_Mexico', '-'),
('Nautilus', 'http://upload.wikimedia.org/wikipedia/en/a/a4/Weston-nautilus.jpg', 'Edward Weston', 'http://en.wikipedia.org/wiki/Nautilus_(photograph)', '-'),
('Nude', 'http://3.bp.blogspot.com/_COhqqZM8RS0/TF9OSsAb9rI/AAAAAAAAAkw/sZPLGvMg0lE/s1600/sothebys_edward_weston_nude.jpg', 'Edward Weston', '-', '-'),
('One', 'http://www.lik.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/w/g/wg000_one_1.jpg', 'Peter Lik', '-', '-'),
('Rhein II', 'http://upload.wikimedia.org/wikipedia/en/thumb/a/aa/Rhein_II.jpg/300px-Rhein_II.jpg', 'Andreas Gursky', 'http://en.wikipedia.org/wiki/Rhein_II', '-'),
('The Pond-Moonlight', 'http://upload.wikimedia.org/wikipedia/commons/6/61/Edward_Steichen_%28American_-_Moonlight-_The_Pond_-_Google_Art_Project.jpg', 'Edward Steichen', 'http://en.wikipedia.org/wiki/The_Pond-Moonlight', '-'),
('Tobolsk Kremlin', 'http://upload.wikimedia.org/wikipedia/commons/e/e4/Tobolsk_Kremlin_by_Dmitry_Medvedev_BW.JPG', 'Dmitry Medvedev', '-', '-'),
('Untangling', 'http://artblart.files.wordpress.com/2013/02/exhi014822_web.jpg', 'Jeff Wall', '-', '-'),
('Untitled (Cowboy)', 'http://www.metmuseum.org/toah/images/h2/h2_2000.272.jpg', 'Richard Prince', '-', '-'),
('Untitled #153', 'http://upload.wikimedia.org/wikipedia/en/a/a9/Cindy-sherman-untitled-153.jpg', 'Cindy Sherman', 'http://en.wikipedia.org/wiki/Untitled_153', '-'),
('Untitled #96', 'http://upload.wikimedia.org/wikipedia/en/6/65/Cindy_Sherman%27s_photo_Untitled_96.jpg', 'Cindy Sherman', 'http://en.wikipedia.org/wiki/Untitled_96', 'A seventh print of Untitled #96 sold for $2.88 million at Christie\'s in May 2012');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
