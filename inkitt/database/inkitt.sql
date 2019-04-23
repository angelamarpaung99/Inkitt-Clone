-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 09:09 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inkitt`
--

-- --------------------------------------------------------

--
-- Table structure for table `isi_novel`
--

CREATE TABLE `isi_novel` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isi` text NOT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isi_novel`
--

INSERT INTO `isi_novel` (`id`, `judul`, `Username`, `tanggal`, `isi`, `gambar`, `harga`) VALUES
(1, 'The Black Notebook', 'IsabelleSnow', '2019-04-22 16:15:09', 'Queenie’s life is not going to plan. She and her long-term partner are on a break that has no end in sight. She’s been forced to move out of the flat they shared together and into a disgusting sharehouse. She is floundering in her job, a job that she’d planned to use to take the journalistic world by storm. No matter what step she takes, she feels judged, or like a failure. In her unwanted state of singledom, she turns to dating apps to forget about her ex. But all of the men she dates are terrible – they fetishise her race, and some even physically harm her. Queenie’s mental health is declining, and she doesn’t have the ability to recognise what the people who love her can clearly see.\r\n\r\nWhen her mental health takes this turn for the worse, Queenie is unfairly dismissed from work and must move back in with her traditional (and hilarious) Jamaican grandparents. Eventually, and quite reluctantly, Queenie seeks professional help and starts to get her life back on track. I adored the character of Queenie so much – she is honest, loveable, flawed, and unapologetically herself. She is also incredibly strong, but in unexpected ways. I was almost physically cheering her on as her recovery progressed, especially as she leaves all of the horrible men she had been dating behind.\r\n\r\nThis book delves deep into issues such as white privilege, sexism, racism, emotional labour, heartbreak, betrayal and internalised misogyny, but does so in a way that is readable and still very enjoyable. I am in awe of Candice Carty-Williams’ skills as an author – she writes with excellent clarity, insight and keeps her sense of humour even when delving into grim topics. To boil it down to a single sentence, this is a very good book about a very bad year. It’s the kind of novel you’ll want to read in one sitting, crying and laughing through each wonderful chapter.', 'best1.jpg', '$2.99'),
(2, 'The Rogue\'s Fate', 'Missy De Graff ', '2019-04-22 16:16:22', 'Why are we all so hostile? So quick to take offence? Truly we are living in the age of outrage.\r\n\r\nA series of apparently random murders draws amiable, old-school Detective Mick Matlock into a world of sex, politics, reality TV and a bewildering kaleidoscope of opposing identity groups. Lost in a blizzard of hashtags, his already complex investigation is further impeded by the fact that he simply doesn’t ‘get’ a single thing about anything anymore.\r\nMeanwhile, each day another public figure confesses to having ‘misspoken’ and prostrates themselves before the judgement of Twitter. Begging for forgiveness, assuring the public that is not who I am .\r\n\r\nBut if nobody is who they are anymore - then who the f**k are we?\r\n\r\nBen Elton returns with a blistering comic satire of the world as it fractures around us. Get ready for a roller-coaster thriller, where nothing - and no one - is off limits. ', 'best2.jpg', '$2.99'),
(3, 'Tough Girl', 'Bonita Van Gerve ', '2019-04-22 16:17:38', 'Where have I come from? From the land of rivers, the land of waterfalls,  the land of ancient chants, the land of mountains…\r\n\r\nSince 2013, Kurdish journalist Behrouz Boochani has been held in the Manus Island offshore processing centre.\r\n\r\nPeople would run to the mountains to escape the warplanes and found asylum within their chestnut forests…\r\n\r\nThis book is the result. Laboriously tapped out on a mobile phone and translated from the Farsi. It is a voice of witness, an act of survival. A lyric first-hand account. A cry of resistance. A vivid portrait through five years of incarceration and exile.\r\n\r\nDo Kurds have any friends other than the mountains?\r\n\r\n‘A chant, a cry from the heart, a lament, fuelled by a fierce urgency, written with the lyricism of a poet, the literary skills of a novelist, and the profound insights of an astute observer of human behaviour and the ruthless politics of a cruel and unjust imprisonment.’ - Arnold Zable', 'best3.jpg', '$2.99'),
(4, 'Silent Embrace', 'Hayley Cyrus ', '2019-04-22 16:18:33', 'The bestselling novel that has taken Australia, and the world, by storm.\r\n\r\n‘Without exaggeration, the best Australian novel I have read in more than a decade … A rollicking ride, rich in philosophy, wit, truth and pathos’ - Sydney Morning Herald\r\n\r\nBrisbane, 1983: A lost father, a mute brother, a mum in jail, a heroin dealer for a stepfather and a notorious crim for a babysitter. It’s not as if Eli’s life isn’t complicated enough already. He’s just trying to follow his heart, learning what it takes to be a good man, but life just keeps throwing obstacles in the way - not least of which is Tytus Broz, legendary Brisbane drug dealer. But Eli’s life is about to get a whole lot more serious. He’s about to fall in love. And, oh yeah, he has to break into Boggo Road Gaol on Christmas Day, to save his mum.\r\n\r\nA story of brotherhood, true love and the most unlikely of friendships, Boy Swallows Universe will be the most heartbreaking, joyous and exhilarating novel you will read all year - an instant Australian classic.\r\n\r\n‘Marvelously plot-rich … filled with beautifully lyric prose … the characterization, too, is universally memorable, especially that of Eli and August. At one point Eli wonders if he is good. The answer is yes, every bit as good as this exceptional novel.’ - Booklist\r\n\r\n‘Trent Dalton is the most extraordinary writer - a rare talent. A major new voice on the Australian literary scene has arrived.’ - Nikki Gemmell\r\n\r\n‘An astonishing achievement. Dalton is a breath of fresh air - raw, honest, funny, moving, he has created a novel of the most surprising and addictive nature. Unputdownable.’ - David Wenham\r\n\r\n‘I couldn’t stop reading from the moment I started, and I still can barely speak for the beauty of it. Trent Dalton has done something very special here, writing with grace, from his own broken heart.’ - Caroline Overington\r\n\r\n‘Stunning. My favourite novel for decades. Left me devastated but looking to the heavens.’ - Tim Rogers\r\n\r\n‘One of the best Australian novels I’ve ever read’ - The Guardian', 'best4.jpg', '$2.99');

-- --------------------------------------------------------

--
-- Table structure for table `komen`
--

CREATE TABLE `komen` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `No` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`No`, `Username`, `Pass`) VALUES
(1, 'angela', '36388794be2cf5f29897'),
(2, 'IsabelleSnow', '4757067ca131abf21c7d'),
(3, 'Missy De Graff', '2e8164cb1177a22d635a'),
(4, 'Bonita Van Gerve', 'bb74d0bb07f632e47ed7'),
(5, 'Hayley Cyrus', 'd6d3b08e4affed587dfb');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pass` varchar(20) NOT NULL,
  `RegisTime` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Username`, `Email`, `Pass`, `RegisTime`) VALUES
('angela', 'angelamarpaung@yahoo.com', '36388794be2cf5f29897', '22-04-2019, 11:41:24'),
('Bonita Van Gerve', 'bonita@gmail.com', 'bb74d0bb07f632e47ed7', '22-04-2019, 18:05:33'),
('Hayley Cyrus', 'hayley@gmail.com', 'd6d3b08e4affed587dfb', '22-04-2019, 18:06:03'),
('IsabelleSnow', 'isabelle@gmail.com', '4757067ca131abf21c7d', '22-04-2019, 18:04:07'),
('Missy De Graff', 'missy@gmail.com', '2e8164cb1177a22d635a', '22-04-2019, 18:04:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `isi_novel`
--
ALTER TABLE `isi_novel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`No`,`Username`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `isi_novel`
--
ALTER TABLE `isi_novel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `komen`
--
ALTER TABLE `komen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
