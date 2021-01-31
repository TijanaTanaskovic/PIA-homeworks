-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2021 at 10:44 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `shortDescription` longtext NOT NULL,
  `genre` varchar(50) NOT NULL,
  `screenwriter` varchar(50) NOT NULL,
  `director` varchar(50) NOT NULL,
  `productionHouse` varchar(50) NOT NULL,
  `listOfActors` varchar(255) NOT NULL,
  `releaseYear` int(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `shortDescription`, `genre`, `screenwriter`, `director`, `productionHouse`, `listOfActors`, `releaseYear`, `photo`, `duration`) VALUES
(1, 'Tenet', 'In a twilight world of international espionage, an unnamed CIA operative, known as The Protagonist, is recruited by a mysterious organization called Tenet to participate in a global assignment that unfolds beyond real time. The mission: prevent Andrei Sator, a renegade Russian oligarch with precognition abilities, from starting World War III. The Protagonist will soon master the art of ', 'Action', 'Christopher Nolan', 'Christopher Nolan', 'Warner Bros.', 'John David Washington, Robert Pattinson, Elizabeth Debicki ', 2020, 'images/tenet.jpg', '150min'),
(2, 'Wonder Women ', 'Diana, princess of the Amazons, trained to be an unconquerable warrior. Raised on a sheltered island paradise, when a pilot crashes on their shores and tells of a massive conflict raging in the outside world, Diana leaves her home, convinced she can stop the threat. Fighting alongside man in a war to end all wars, Diana will discover her full powers and her true destiny.', 'Action', 'Patty Jenkins', 'Allan Heinberg', ' Warner Bros., Atlas Entertainment', 'Gal Gadot, Chris Pine, Robin Wright', 2017, 'images/wonderwomen.jpg', '141min'),
(3, 'What Happened to Monday', 'In a not so distant future, where overpopulation and famine have forced governments to undertake a drastic One-Child Policy, seven identical sisters (all of them portrayed by Noomi Rapace) live a hide-and-seek existence pursued by the Child Allocation Bureau. The Bureau, directed by the fierce Nicolette Cayman (Glenn Close), enforces a strict family-planning agenda that the sisters outwit by taking turns assuming the identity of one person: Karen Settman. Taught by their grandfather (Willem Dafoe) who raised and named them - Monday, Tuesday, Wednesday, Thursday, Friday, Saturday and Sunday - each can go outside once a week as their common identity, but are only free to be themselves in the prison of their own apartment. That is until, one day, Monday does not come home.', 'Action', 'Max Botkin', 'Tommy Wirkola', 'Vendome Pictures', 'Noomi Rapace, Glenn Close, Willem Dafoe', 2017, 'images/monday.jpg', '123min'),
(4, 'Knives Out', 'A detective investigates the death of a patriarch of an eccentric, combative family.When renowned crime novelist Harlan Thrombey (Christopher Plummer) is found dead at his estate just after his 85th birthday, the inquisitive and debonair Detective Benoit Blanc (Daniel Craig) is mysteriously enlisted to investigate. From Harlan\'s disfunctional family to his devoted staff, Blanc sifts through a web of red herrings and self-serving lies to uncover the truth behind Harlan\'s untimely death.', 'Comedy', 'Rian Johnson', 'Rian Johnson', 'Lionsgate', 'Daniel Craig, Chris Evans, Ana de Armas ', 2019, 'images/knivesout.jpg', '130min'),
(5, 'The King of Staten Island', 'Scott has been a case of arrested development since his firefighter dad died. He spends his days smoking weed and dreaming of being a tattoo artist until events force him to grapple with his grief and take his first steps forward in life.', 'Comedy', 'Judd Apatow', 'Judd Apatow', 'Universal Pictures', 'Pete Davidson, Bel Powley, Ricky Velez', 2020, 'images/king.jpg', '136min'),
(6, 'Fast Times at Ridgemont High', 'Follows a group of high school students growing up in southern California, based on the real-life adventures chronicled by Cameron Crowe. Stacy Hamilton and Mark Ratner are looking for a love interest, and are helped along by their older classmates, Linda Barrett and Mike Damone, respectively. The center of the film is held by Jeff Spicoli, a perpetually stoned surfer dude who faces off with the resolute Mr. Hand, who is convinced that everyone is on dope.', 'Comedy', 'Cameron Crowe ', 'Amy Heckerling', 'Universal Pictures', 'Sean Penn, Jennifer Jason Leigh, Judge Reinhold', 1982, 'images/fast.jpg', '150min'),
(7, 'The Midnight Sky ', 'This post-apocalyptic tale follows Augustine, a lonely scientist in the Arctic, as he races to stop Sully and her fellow astronauts from returning home to a mysterious global catastrophe.', 'Drama', 'Lily Brooks-Dalton', 'George Clooney', 'Netflix', 'George Clooney, Felicity Jones, David Oyelowo ', 2020, 'images/sky.jpg', '118min'),
(8, 'Synchronic', 'Two New Orleans paramedics\' lives are ripped apart after they encounter a series of horrific deaths linked to a designer drug with bizarre, otherworldly effects.', 'Drama', 'Justin Benson', 'Justin Benson', 'Patriot Pictures', 'Anthony Mackie, Jamie Dornan, Katie Aselton', 2019, 'images/sin.jpg', '102min'),
(9, 'Sightless', 'After an attack renders her blind, Ellen Ashland withdraws from the world to recover. But soon she plunges into paranoia, unable to convince anyone that her assailant has returned to terrorize her by hiding in plain sight.\r\n\r\n', 'Drama', 'Cooper Karl', 'Cooper Karl', 'Headlong Entertainment', 'Madelaine Petsch, Alexander Koch, Deniz Akdeniz', 2020, 'images/sigh.jpg', '89min'),
(10, 'Shutter Island', 'In 1954, up-and-coming U.S. marshal Teddy Daniels is assigned to investigate the disappearance of a patient from Boston\'s Shutter Island Ashecliffe Hospital. He\'s been pushing for an assignment on the island for personal reasons, but before long he thinks he\'s been brought there as part of a twisted plot by hospital doctors whose radical treatments range from unethical to illegal to downright sinister. Teddy\'s shrewd investigating skills soon provide a promising lead, but the hospital refuses him access to records he suspects would break the case wide open. As a hurricane cuts off communication with the mainland, more dangerous criminals \"escape\" in the confusion, and the puzzling, improbable clues multiply, Teddy begins to doubt everything - his memory, his partner, even his own sanity.', 'Thriller', 'Laeta Kalogridis', 'Martin Scorsese', 'Paramount Pictures', 'Leonardo DiCaprio, Emily Mortimer, Mark Ruffalo', 2010, 'images/island.jpg', '138min'),
(11, 'Memento', 'Memento chronicles two separate stories of Leonard, an ex-insurance investigator who can no longer build new memories, as he attempts to find the murderer of his wife, which is the last thing he remembers. One story line moves forward in time while the other tells the story backwards revealing more each time.', 'Thriller', 'Christopher Nolan', 'Christopher Nolan', 'Newmarket Capital Group', 'Guy Pearce, Carrie-Anne Moss, Joe Pantoliano ', 2000, 'images/memento.jpg', '113min'),
(12, 'Leon: The Professional', 'After her father, step-mother, step-sister and little brother are killed by her father\'s employers, the 12-year-old daughter of an abject drug dealer manages to take refuge in the apartment of a professional hitman who at her request teaches her the methods of his job so she can take her revenge on the corrupt DEA agent who ruined her life by killing her beloved brother.', 'Thriller', 'Luc Besson', 'Luc Besson', 'Gaumont', 'Jean Reno, Gary Oldman, Natalie Portman ', 1994, 'images/leon.jpg', '110min'),
(13, 'The Exorcism in Amarillo', 'Based on the true story of Ashley Hays Wright. In the Texas town of Amarillo, her family will unknowingly open the door to evil that will change their lives forever. Ashley and her three daughters will have to face the powers of darkness while her husband is away at the Iraq War. She will have to confront spiritual warfare, and find a way to save her daughters. Tormented, tired, and weak the family will have to call upon God to help them remove the demons from the house. Will her husband get back in time before his entire family is lost?', 'Horror', 'Ashley Hays Wright', 'Ashley Hays Wright', 'Wright Family Films', 'Ashley Hays Wright, Cadence Wright, David Owen Wright', 2020, 'images/exorcism.jpg', '89min'),
(14, 'Isha', 'The ghost of Isha, who was murdered by a few powerful men, possesses the body of a girl in a family that moves to a hill station bungalow. Isha is out there to take vengeance.', 'Horror', 'Jose Thomas', 'Jose Thomas', 'Visual Dreams Production', 'Kishore Satya, Abhishek Vinod', 2020, 'images/isha.jpg', '118min'),
(15, 'The Shining', 'A novelist - Jack Torrance takes a job interview as winter caretaker of the isolated, old, huge and beautiful Overlook Hotel. Jack brings his wife - Wendy and his son Danny. It happens that Danny, has a mysterious power known as \"The Shining\". Danny meets Hallorann - the hotel cook in their first day arriving at the Overlook, who warns him about the hotel and the sinister Room 237. As the days go by, Danny has visions, meanwhile Jack starts driving into insanity, turning more and more aggressive, at the point that Danny and Wendy gets convinced that Jack might try to do something bad.', 'Horror', 'Stanley Kubrick', 'Stanley Kubrick', 'Warner Bros.', 'Jack Nicholson, Shelley Duvall, Danny Lloyd ', 1980, 'images/shining.jpg', '146min'),
(16, 'Love, Rosie', 'Rosie and Alex have been best friends since they were 5, so they couldn\'t possibly be right for one another...or could they? When it comes to love, life and making the right choices, these two are their own worst enemies.', 'Romance', 'Juliette Towhidi ', 'Christian Ditter', 'Canyon Creek Films', 'Lily Collins, Sam Claflin, Christian Cooke ', 2014, 'images/rosie.jpg', '102min'),
(17, 'Call Me by Your Name', 'In early-1980s northern Italy, amid the lush Mediterranean landscapes of a serene and golden summer, seventeen-year-old Elio visits the family\'s summer villa to spend his vacation. But, apart from his father and Greco-Roman culture professor, Mr Perlman, and his translator mother, Annella, the twenty-four-year-old American doctoral student, Oliver, is working there as an intern. Now, against the backdrop of incurable summer ennui, little by little, over the course of six ephemeral weeks, a timid friendship between Elio and Oliver will prepare the ground for an unexpected bond, as the unexplored emotions of first love start boiling over. Could this sun-kissed romance in Lombardy be the prelude to maturity?', 'Romance', 'James Ivory', 'Luca Guadagnino', 'Frenesy Film Company', 'Armie Hammer, Timothee Chalamet, Michael Stuhlbarg', 2017, 'images/name.jpg', '132min'),
(18, 'Love Actually', 'The characters are falling in love, falling out of love, some are with right people, some are with the wrong people, some are looking to have an affair, some are in the period of mourning; a capsule summary of reality. Love begins and love ends. They flirt a lot. They are all flirting with love. At all ages and social levels, love is the theme. Romantic love and brotherly love is the hotchpotch through out the movie. Most of this movie was filmed in London during Christmas, and the characters all ended up at Heathrow airport on an uplifting note.', 'Romance', 'Richard Curtis', 'Richard Curtis', 'Universal Pictures', 'Hugh Grant, Martine McCutcheon, Liam Neeson', 2003, 'images/love.jpg', '135min');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

DROP TABLE IF EXISTS `usertable`;
CREATE TABLE IF NOT EXISTS `usertable` (
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`name`, `surname`, `email`, `username`, `psw`, `admin`) VALUES
('Tijana', 'Tanaskovic', 'tijana.kg98@gmail.com', 'ttlepotica', 'tinadulce123', 'admin'),
('Janko', 'Subotic', 'jankojanko@gmail.com', 'jankic', 'jankic123', ''),
('Andjeo', 'Anic', 'andjelcic@gmail.com', 'andjeoa', 'andjeo123', ''),
('Miroslav', 'Tanaskovic', 'miroslav@gmail.com', 'miroslavt', 'miroslav123', ''),
('Mateja', 'Matejic', 'mateja@gmail.com', 'matejam', 'mateja123', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
