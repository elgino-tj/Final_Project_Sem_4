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
-- Table structure for table `sculptures`
--

CREATE TABLE `sculptures` (
  `Scultpure` text DEFAULT NULL,
  `Artist` text DEFAULT NULL,
  `Year` text DEFAULT NULL,
  `Scultpure Wikipedia Profile` text DEFAULT NULL,
  `Image` text DEFAULT NULL,
  `Artist Wikipedia Profile` text DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sculptures`
--

INSERT INTO `sculptures` (`Scultpure`, `Artist`, `Year`, `Scultpure Wikipedia Profile`, `Image`, `Artist Wikipedia Profile`, `Description`) VALUES
('Artemis and the Stag', 'Unknown', '-', 'http://en.wikipedia.org/wiki/Artemis_and_the_Stag', 'http://www.artquid.com/files/image/artemis_and_the_stag.jpg', '-', 'Artemis and the Stag is an early Roman Imperial or Hellenisticbronze sculpture of the ancient Greek goddess Artemis. In June 2007 the Albright-Knox Art Gallery placed the statue into auction; it fetched $28.6 million, the highest sale price of any sculpture at the time.'),
('Balloon Dog (Orange)', 'Jeff Koons', '1994', '-', 'http://www.christies.com/sales/jeff-koons-balloon-dog-november-2013/images/overview/3-right.jpg', 'http://en.wikipedia.org/wiki/Jeff_Koons', '-'),
('Bird in Space', 'Constantin BrÃ¢ncuÈ™i', '1923', 'http://en.wikipedia.org/wiki/Bird_in_Space', 'http://annex.guggenheim.org/collections/media/full/76.2553.51_ph_web.jpg', 'http://en.wikipedia.org/wiki/Constantin_Br%C3%A2ncu%C8%99i', 'Bird in Space (L\'Oiseau dans l\'espace) is a series of sculptures by Romanian sculptor Constantin BrÃ¢ncuÈ™i. The original work was created in 1923. It was sold in 2005 for $27.5 million, at the time a record price for a sculpture sold in an auction. The original title in Romanian is \"PasÄƒrea Ã®n vÄƒzduh.\"\"\"'),
('Grande Femme Debout II', 'Alberto Giacometti', '1959, 1960', '-', 'https://c1.staticflickr.com/5/4154/5043461038_8cd892bb15_z.jpg', 'http://en.wikipedia.org/wiki/Alberto_Giacometti', '-'),
('Grande tete mince', 'Alberto Giacometti', '1955', 'http://en.wikipedia.org/wiki/Grande_t%C3%AAte_mince', 'http://upload.wikimedia.org/wikipedia/en/2/28/Grande_t%C3%AAte_mince_front_and_side_views.jpg', 'http://en.wikipedia.org/wiki/Alberto_Giacometti', 'Grande tÃªte mince is a bronze sculpture by Alberto Giacometti. The work was conceived in 1954 and cast the following year. Auctioned in 2010, Grande tÃªte mince became one of the most valuable sculptures ever sold when it fetched $53.3 million.'),
('Guennol Lioness', 'Unknown', '-', 'http://en.wikipedia.org/wiki/Guennol_Lioness', 'http://upload.wikimedia.org/wikipedia/commons/f/ff/Guennol_Lioness.jpg', '-', 'The Guennol Lioness is a 5,000-year-old Mesopotamian statue found near Baghdad, Iraq. Depicting a muscular anthropomorphic lioness-woman, it sold for $57.2 million at Sotheby\'s auction house on December 5, 2007. The sculpture had been acquired by a private collector, Alastair Bradley Martin, in 1948 from the collection of Joseph Brummer, and had been on display at Brooklyn Museum of Art in New York City from that time to its sale in 2007.'),
('L\'Homme qui marche I', 'Alberto Giacometti', '1961', 'http://en.wikipedia.org/wiki/L%27Homme_qui_marche_I', 'http://artpulsemagazine.com/wp-content/uploads/2010/07/lot-8-giacometti-lhomme-qui-marche-i-a.gif', 'http://en.wikipedia.org/wiki/Alberto_Giacometti', 'Lâ€™Homme qui marche I (The Walking Man I or The Striding Man I, lit. The Man who Walks I) is the name of any one of the cast bronze sculptures that comprise six numbered editions plus four artist proofs created by Swiss sculptor Alberto Giacometti in 1961. On 3 February 2010, the second edition of the cast of the sculpture became one of the most expensive works of art ever sold at auction, and the most expensive sculpture.'),
('Madame LR (Portrait de Mme LR)', 'Constantin BrÃ¢ncuÈ™i', '1914, 1917', '-', 'http://uploads5.wikiart.org/images/constantin-brancusi/madame-lr-portrait-de-mme-lr-1918.jpg!Blog.jpg', 'http://en.wikipedia.org/wiki/Constantin_Br%C3%A2ncu%C8%99i', '-'),
('Nu de dos, 4 état (Back IV)', 'Henri Matisse', '1958', '-', 'http://www.christies.com/lotfinderimages/d53694/henri_matisse_nu_de_dos_4_etat_d5369418h.jpg', 'http://en.wikipedia.org/wiki/Henri_Matisse', '-'),
('Reclining Figure: Festival', 'Henry Moore', '1951', 'http://en.wikipedia.org/wiki/Reclining_Figure:_Festival', 'http://www.christies.com/lotfinderimages/d55323/henry_moore_reclining_figure_festival_d5532370h.jpg', 'http://en.wikipedia.org/wiki/Henry_Moore', 'Reclining Figure: Festival (LH 293) is a bronze sculpture by English artist Henry Moore, commissioned by the Arts Council in 1949 for the Festival of Britain in 1951. The sculpture can be viewed as an abstraction of a reclining female human figure, resting on two arms, with a small head.'),
('Tête', 'Amedeo Modigliani', '1910, 1912', 'http://en.wikipedia.org/wiki/T%C3%AAte_(sculpture)', 'http://4.bp.blogspot.com/_E-uykHk4AyM/TBh7oAfF2KI/AAAAAAAAA2Y/5j5r4yMJe1c/s1600/modigliani.jpg', 'http://en.wikipedia.org/wiki/Amedeo_Modigliani', 'TÃªte is a limestone sculpture by Amedeo Modigliani and is amongst the most expensive works of art ever sold. In 2010 an anonymous telephone bidder purchased TÃªte for â‚¬43.2 million at Christie\'s in Paris. The sale was a record at a French auction and placed the sculpture amongst the most expensive ever sold. An anonymous telephone bidder won the auction. Since 1927 the piece had been in the collection of Gaston LÃ©vy, an artist and acquaintance of Modigliani.'),
('Tete de femme (Dora Maar)', 'Pablo Picasso', '1941', 'http://en.wikipedia.org/wiki/Tete_de_femme_(Dora_Maar)', 'http://upload.wikimedia.org/wikipedia/en/2/2b/Tete_de_femme_%28Dora_Maar%29.jpg', 'http://en.wikipedia.org/wiki/Pablo_Picasso', 'Tete de femme (Dora Maar) is a plaster-modelled, bronze-cast sculpture by Pablo Picasso. Dora Maar, Picasso\'s lover at the time, was the subject of the work which was originally conceived in 1941. Four copies of the bust were cast in the 1950s, several years after the relationship ended.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
