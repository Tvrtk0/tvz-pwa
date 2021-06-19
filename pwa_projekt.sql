-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 13, 2021 at 01:25 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwa_projekt`
--
CREATE DATABASE IF NOT EXISTS `pwa_projekt` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `pwa_projekt`;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `archive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `date`, `title`, `summary`, `content`, `image`, `category`, `archive`) VALUES
(1, '2021-06-02', 'Nepomniachtchi Can\'t Play Carlsen Under Russian Flag', 'GM Ian Nepomniachtchchi cannot play under the Russian flag during his world championship match with GM Magnus Carlsen in November-December in Dubai. The reason is Russia\'s ban from international sporting competitions by the World Anti-Doping Agency.', 'The WADA ban, imposed for a big doping cover-up scandal, was set for four years in December 2019 but subsequently halved in December 2020 by the Court of Arbitration for Sport (CAS). This means that until the end of 2022, Russian athletes cannot compete in Olympics and world championship events representing their country, and Russia cannot organize world-class events.\r\n<br><br>\r\n\r\nThe ban seemed to have little effect on the chess world when it became clear that the FIDE Candidates Tournament, which finished a few days ago in Yekaterinburg, could go on as planned. The three Russian participants could play under their flag as well.\r\n<br><br>\r\n\r\nHowever, now that a Russian player has qualified for the world championship things will be different, because it\'s a world championship. There, the international ban is in effect, meaning that Nepomniachtchi will have to participate as a neutral player. There will be no Russian flag on the table and the Russian national anthem won\'t be played.\r\n<br><br>\r\n\r\nArticle: <a href=\"https://www.chess.com/news/view/nepomniachtchi-russian-flag-wada-ban\" target=\"_blank\">www.chess.com</a>', 'nepo1.png', 'general', 0),
(2, '2021-06-06', 'Nepomniachtchi Wins FIDE Candidates Tournament', 'GM Ian Nepomniachtchi won the FIDE Candidates Tournament with a round to spare. The 30-year-old Russian grandmaster will now play GM Magnus Carlsen for the world championship in November.\r\n', 'The Russian grandmaster, who was born Bryansk, 379 kilometers (235 mi) southwest of Moscow, is now the fourth player who will try to dethrone Carlsen. In 2014, GM Vishy Anand, who also won the Candidates with a round to spare, failed to win back the title that he had lost to Carlsen the year before. In 2016, GM Sergey Karjakin tied the title match with Carlsen but lost the rapid tiebreak and two years later, Caruana suffered the exact same fate.\r\n<br><br>\r\n\r\nFor Carlsen, this will be the third opponent in a row from his own generation, i.e. born in the early 1990s. Perhaps more than ever, the world champion cannot be too confident about the outcome.\r\n<br><br>\r\n\r\nA nice historic detail is that back in 2002, Nepomniachtchi won the U12 World Youth Championship where he edged out Carlsen on tiebreak. More worrying for Carlsen should be the head-to-head score: Nepomniachtchi is the only top grandmaster who has a plus score against him, leading four to one in classical games, with six draws.\r\n<br><br>\r\n\r\nAsked about his compatriot\'s chances in the match, Grischuk noted: \"They exist. For most players, they are a bit illusory but for him, they definitely exist. Less than 50 percent but much more than zero.\" \r\n<br><br>\r\n\r\nArticle: <a href=\"https://www.chess.com/news/view/nepomniachtchi-wins-fide-candidates-tournament\" target=\"_blank\">www.chess.com</a>', 'nepo2.jpeg', 'tournaments', 0),
(3, '2021-06-03', 'Kasparov Relaunches Online Platform', '22 years after trying for the first time, GM Garry Kasparov repeated a bold move. The 13th world champion has announced the relaunch of KasparovChess, described as \"a new multimedia content platform for chess lovers of all skill levels.\"', 'The platform intends to serve chess players of all levels with puzzles, online matches, tutorials, articles, documentaries, and an exclusive masterclass by Kasparov himself for premium members. The site will charge $13.99 monthly or $119.99 for a yearly subscription.\r\n<br><br>\r\n\r\nAlthough according to Kasparov it has been several years in the making, the launch of yet another chess platform is also a sign of the times. The global pandemic, but even more so the Netflix series The Queen\'s Gambit, has caused a boom previously seen only with the 1972 Fischer-Spassky match.\r\n<br><br>\r\n\r\n\"We are showing the world that there is so much more to chess than strategy and tactics,\" said Kasparov. \"It is a way of life and a way of looking at the world. I hope to bring all people into this experience, even if they’ve never played before because chess can help them become everything that they want to be.\"\r\n<br><br>\r\n\r\nArticle: <a href=\"https://www.chess.com/news/view/garry-kasparov-kasparovchess\" target=\"_blank\">www.chess.com</a>\r\n\r\n', 'kasparov.png', 'general', 0),
(4, '2021-06-01', 'Praggnanandhaa Wins Polgar Challenge Convincingly', 'GM Praggnanandhaa R won the Polgar Challenge, the first leg of the new Challengers Chess Tour. The 15-year-old Indian grandmaster finished 1.5 points ahead of the pack and qualified for the next leg of the Champions Chess Tour.', 'Praggnanadhaa was leading halfway through the tournament and the situation hardly changed on Saturday: he was still half a point ahead of the 16-year-old Uzbek GM Nodirbek Abdusattorov after 15 rounds.\r\n<br><br>\r\n\r\nThat 15th round, however, was a dramatic one. The tournament leader suffered was what only his second loss against GM Vincent Keymer. The 16-year-old German grandmaster won an endgame that was quite similar to the classic ending GM Bobby Fischer vs. GM Mark Taimanov, fourth match game 1971.\r\n<br><br>\r\n\r\nThe Polgar Challenge ran April 8-11, 2021. The time control was 10 minutes for each game with a five-second increment. The games were played on chess24. It was part of the Challengers Chess Tour that comprises four such tournaments followed by an eight-player final.\r\n<br><br>\r\n\r\nArticle: <a href=\"https://www.chess.com/news/view/praggnanandhaa-wins-polgar-challenge\" target=\"_blank\">www.chess.com</a>\r\n\r\n', 'pragg.png', 'tournaments', 0),
(5, '2021-06-07', 'Anish Giri Wins 2021 Magnus Carlsen Invitational', 'After another 2-2 in their second match, GM Anish Giri defeated GM Ian Nepomniachtchi in the playoff to win the Magnus Carlsen Invitational on Sunday. Giri earned $60,000 for first place. GM Magnus Carlsen came in third after securing two game points vs. Wesley So. ', '\"Again it was a lottery, and this time the winning ticket went to another guy,\" is how Nepomniachtchi summed up this final. And he had a point because he clearly had chances to win it as well—but only after Giri had dominated in the first three games.\r\n<br><br>\r\n\r\nGiri took the lead in game two, once again with the wonderful, dynamic play that he had been showing throughout the tournament. As it turns out, you can also play the Keres Attack against the Taimanov!\r\n<br><br>\r\n\r\nThe Russian player chose 1.b3 for the second blitz game but didn\'t get anything out of the opening and then blundered positionally, after which his winning chances were gone.\r\n\r\nGiri was surprised to see 1.b3: \"Usually, people play 1.b3 because they want to get an interesting position because they are sick and tired of boring openings. But I\'m playing the Najdorf. I don\'t really see why you would avoid the Najdorf in a must-win. It\'s anything but solid. But I can imagine, he probably felt I was very well prepared, and he didn\'t want to end up in the situation where he ends up in my preparation. He just wanted to get a \'man against a man.\' It\'s fair enough.\"\r\n<br><br>\r\n\r\nArticle: <a href=\"https://www.chess.com/news/view/anish-giri-wins-2021-magnus-carlsen-invitational\" target=\"_blank\">www.chess.com</a>', 'giri.png', 'tournaments', 0),
(6, '2021-06-13', 'test123', 'test123123', 'test123123', 'carlsen-wins.png', 'general', 1),
(8, '2021-06-03', 'Firouzja Wins 2021 Bullet Chess Championship Presented By SIG', 'GM Alireza Firouzja has won the 2021 Bullet Chess Championship presented by SIG. The Iranian super-GM first eliminated top favorite GM Hikaru Nakamura in the semifinals and then was too strong for GM Andrew Tang in the final.', 'The Bullet Chess Championship presented by SIG was held April 5-7 on Chess.com with the very best bullet players on the planet. Only World Champion Magnus Carlsen was missing from an otherwise star-studded field. Firouzja earned $10,000 for his first place.\r\n<br><br>\r\n\r\nBy winning the last two games, Tang could at least set an \"acceptable\" final score, but the 11-6 didn\'t leave any doubts. Firouzja took the $10,000 first prize while Tang earned $6,000. Both Nakamura and Naroditsky won $2,500.\r\n<br><br>\r\n\r\nFirouzja definitely had his share of winner\'s luck as GM Vladislav Artemiev had him on the ropes in the quarterfinals and only needed to let the match clock run down for nine more seconds to win their match. Instead, the Russian GM resigned, allowing another game after which Firouzja eventually won.\r\n<br>\r\nSpeaking after the final, Firouzja called that quarterfinal match \"a miracle,\" adding: \"I should have lost that, a 100 percent. I got lucky, I guess.\"\r\n<br><br>\r\n\r\nArticle: <a href=\"https://www.chess.com/news/view/firouzja-wins-2021-bullet-chess-championship\" target=\"_blank\">www.chess.com</a>', 'alireza.png', 'tournaments', 0),
(10, '2021-06-08', 'Carlsen Wins FTX Crypto Cup', 'On the third attempt, GM Magnus Carlsen finally managed to beat GM Wesley So in a Champions Chess Tour final. In a thriller of a second match, the world champion ended up winning the all-decisive armageddon game. ', 'It was another match where Carlsen started well but couldn\'t avoid getting into trouble later. So had all the chances to complete his hattrick of Champions Chess Tour finals against the world champion but this time, Carlsen was strong enough to come back and pull through.<br>\r\nHow much this victory meant to him became clear right away. On camera, Carlsen went all out showing his emotions as he punched the air in delight. <br><br>\r\n\r\nThe FTX Crypto Cup ran May 23-31 on chess24. The preliminary phase was a 16-player rapid (15|10) round-robin. The top eight players advanced to a six-day knockout that consisted of two days of four-game rapid matches, which advanced to blitz (5|3) and armageddon (White had five minutes, Black four with no increment) tiebreaks only if a knockout match was tied after the second day. The prize fund was $220,000 with a bonus of 2.1825 Bitcoin.\r\n<br><br>\r\nArticle: <a href=\"https://www.chess.com/news/view/carlsen-wins-ftx-crypto-cup\" target=\"_blank\">www.chess.com</a>', 'carlsen-wins.png', 'tournaments', 0),
(11, '2021-06-05', 'Chess For Freedom: Online Conference, Tournament On Tuesday', 'The first Chess for Freedom program, aimed at the introduction of chess as a tool for education and social inclusion in prisons, takes place May 11, 2021.', 'Chess Federation (FIDE) and the Cook County Sheriff’s Office (Chicago) and held under the patronage of the 12th world chess champion, GM Anatoly Karpov. <br>\r\n\r\nThe project kicks off on May 11 with an online conference and an online exhibition tournament with four participating countries: Armenia, Russia, Spain, and the U.S. The tournament will be held on Chess.com and broadcast live on the FIDE YouTube channel. <br><br>\r\n\r\nThe project originally started in 2012. Cook County Sheriff Tom Dart approached Mikhail Korenman, a well-known chess personality. Korenman had founded the Karpov School of Chess in Lindsborg, Kansas, and initiated the internationally acclaimed \"Chess for Peace\" program. He and Dart started a \"chess in jail\" program and just a year later, about 600 inmates had already taken part. <br><br>\r\n\r\nArticle: <a href=\"https://www.chess.com/news/view/chess-for-freedom-online-conference-tournament\" target=\"_blank\">www.chess.com</a>', 'ChessForFreedom.png', 'general', 0),
(12, '2021-06-13', 'The Intersection Of Poker And Chess', 'This article was written by Bill Chen, an expert poker and chess player working at Susquehanna International Group (SIG), and is sponsored by SIG in conjunction with their support of the 2021 Bullet Chess Championship.', 'I am a World Series of Poker bracelet winner, co-author of The Mathematics of Poker, an expert-level chess player, and a quantitative researcher at (SIG), a leading global quantitative trading firm. <br><br>\r\n\r\nAt SIG, we enjoy seeking out competition in both poker and chess. Our employees have won many World Series of Poker bracelets, we placed first in the U.S. Amateur Team East Chess Tournament in 2020 over several hundred teams, and we won the recent online North American Corporate Chess League Championship. It’s clear SIG values many of the characteristics that top poker and chess players have.<br><br>\r\n\r\nThe analysis and creation of these strategies in poker and chess are what interests me given my line of work, but I think computers have really affected both games. Competitors now try to take as much from the computers as they can into their own game, and I\'m sure everyone is much stronger now than they used to be.<br><br>\r\n\r\nSo, how do poker and chess intersect? Each game, or hand, is ultimately an exchange of ideas and a battle of styles. Is one an attacking player that goes for the kill, or one that sees a weakness and picks on it until their opponent’s position is untenable? <br><br>\r\n\r\nArticle: <a href=\"https://www.chess.com/article/view/the-intersection-of-poker-and-chess\" target=\"_blank\">www.chess.com</a>', '8e86ff5cfa.jpeg', 'general', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `username`, `password`, `admin`) VALUES
(1, 'admin', 'admin', 'admin', '$2y$10$icZQMXSRQk2OVffHOJcX1.6ciikf9ArCDOtxtZGj15XW5fesu9dGi', 1),
(2, 'user', 'user', 'user', '$2y$10$mUX8I8UWTmpMsFGlfIxx3./iR0G7QkkjnxdmrMf/VBhxYMf9hrN2y', 0),
(3, 'user2', 'user2', 'user2', '$2y$10$W5ZvGpdldM9k5.Hes9xcE.uFfTBnRmZ5udD4km2z5KZYWTZgE4HX.', 0),
(4, 'user3', 'user3', 'user3', '$2y$10$T6/UvZ.dnfqb21i7YFLiW.Ahx2JoXndrPJ4KSRa47u8/ox3fxCQKC', 0),
(5, 'user4', 'user4', 'user4', '$2y$10$HPOWHdr1j3tYSbsFuFajeO5UvJUiOum5cAsXRChWFriReCLc.pmRO', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
