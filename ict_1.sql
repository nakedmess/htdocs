-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 11:18 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ict_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `user` varchar(35) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pass_hash` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `user`, `pass`, `email`, `name`, `pass_hash`) VALUES
(1, 'biezpiens', 'c3284d0f94606de1fd2af172aba15bf3', 'kristaps.kukurans@gmail.com', 'Kristaps', 'gc6xpivs'),
(6, 'admin', 'c3284d0f94606de1fd2af172aba15bf3', 'admin@admin.com', 'admin', '5qgetmlo');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(9, 'Sports'),
(10, 'Entertainment &amp; Arts'),
(11, 'Business'),
(12, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `name` text NOT NULL,
  `date` datetime NOT NULL,
  `news_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `description`, `name`, `date`, `news_id`) VALUES
(1, 'Man patīk!', 'Kristaps2', '2022-11-11 19:42:11', 1),
(2, 'Man nepatīk!', 'Kristaps', '2022-11-11 19:41:11', 1),
(3, 'Man patīk!', 'Kristaps', '2022-11-11 19:22:11', 2),
(4, 'Nezinu!', 'Kristaps1', '2022-11-11 19:42:11', 2),
(5, 'Man patīk!', 'Kristaps', '2022-11-11 19:22:11', 3),
(6, 'Man nepatīk!', 'Kristaps', '2022-11-11 19:42:11', 3),
(7, 'Man patīk!', 'Kristaps', '2022-11-11 19:22:11', 4),
(8, 'Man nepatīk!', 'Kristaps', '2022-11-11 19:42:11', 4),
(9, 'Man patīk!', 'Kristaps', '2022-11-11 19:22:11', 5),
(10, 'Man nepatīk!', 'Kristaps', '2022-11-11 19:42:11', 5),
(11, 'Man patīk!', 'Kristaps', '2022-11-11 19:22:11', 6),
(12, 'Man nepatīk!', 'Kristaps', '2022-11-11 19:42:11', 6),
(13, 'Man patīk!', 'Kristaps', '2022-11-11 19:22:11', 7),
(14, 'Man nepatīk!', 'Kristaps', '2022-11-11 19:42:11', 7),
(15, 'Man patīk!', 'Kristaps', '2022-11-11 19:22:11', 8),
(16, 'Man nepatīk!', 'Kristaps', '2022-11-11 19:42:11', 8),
(17, 'Man patīk!', 'Kristaps', '2022-11-11 19:22:11', 9),
(18, 'Man nepatīk!', 'Kristaps', '2022-11-11 19:42:11', 9),
(19, 'Man patīk!', 'Kristaps', '2022-11-11 19:22:11', 10),
(20, 'Man nepatīk!', 'Kristaps', '2022-11-11 19:42:11', 10),
(21, 'Man patīk!', 'Kristaps', '2022-11-11 19:22:11', 11),
(22, 'Man nepatīk!', 'Kristaps', '2022-11-11 19:42:11', 11),
(23, 'Man patīk!', 'Kristaps', '2022-11-11 19:22:11', 12),
(24, 'Man nepatīk!', 'Kristaps', '2022-11-11 19:42:11', 12),
(46, 'Elon&#039;s actions are questionable...', 'Slēpe', '2022-11-13 11:07:30', 10);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL,
  `author` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `category_id`, `description`, `date`, `author`, `photo`) VALUES
(1, 'Reds sign off for World Cup break in style', 9, '&lt;p&gt;Liverpool started the day eighth in the table but temporarily moved up into sixth, five points off a Champions League spot, ahead of the games to come later on Saturday and on Sunday.&lt;/p&gt;\r\n\r\n&lt;p&gt;The Reds were without Ibrahima Konate and Jordan Henderson - who are due to go to the World Cup with France and England respectively - while manager Jurgen Klopp was forced to watch this game from the stands as he served a touchline ban.&lt;/p&gt;\r\n\r\n&lt;p&gt;Yet Liverpool&amp;#39;s players enjoyed themselves in the absence of their German boss from the dugout as they scored all three goals in an enthralling opening 45 minutes.&lt;/p&gt;\r\n\r\n&lt;p&gt;The Reds have seven players going to the World Cup as it stands - Alisson (Brazil), Fabinho (Brazil), Konate (France), Trent Alexander-Arnold (England), Jordan Henderson (England), Nunez (Uruguay) and Virgil van Dijk (Netherlands).&lt;/p&gt;\r\n\r\n&lt;p&gt;Klopp will spend the next few weeks with those staying behind including Mohamed Salah and Firmino.&lt;/p&gt;\r\n\r\n&lt;p&gt;It was striking how all of Firmino&amp;#39;s outfield team-mates celebrated with him after scoring his seventh Premier League goal of the season after the disappointment of his omission from Brazil&amp;#39;s squad.&lt;/p&gt;\r\n\r\n&lt;p&gt;There was a landmark moment for 36-year-old James Milner when he came on in the second half for his 600th Premier League appearance.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Big job ahead for Jones&lt;/h3&gt;\r\n\r\n&lt;p&gt;Jones will welcome the forthcoming Premier League break as it gives him time on the training pitch to get his ideas across to his new players.&lt;/p&gt;\r\n\r\n&lt;p&gt;The Welshman faces a big job keeping Southampton in the Premier League after taking over from Ralph Hasenhuttl, who was sacked following last week&amp;#39;s 4-1 home defeat to Newcastle.&lt;/p&gt;\r\n', '2022-11-11 17:42:11', 'Kristaps', 'uploads/4.jpg'),
(2, 'Odegaard could be Arsenal&#039;s title key', 9, '&lt;p&gt;Twelve victories and 37 points represents Arsenal&amp;#39;s best record 14 games into a season.&lt;/p&gt;\r\n\r\n&lt;p&gt;They do still have to play defending champions City as their first planned league game against them was called off last month to allow the Gunners to get up to date with their Europa League programme.&lt;/p&gt;\r\n\r\n&lt;p&gt;They also have to face an in-form Newcastle, but they have met all the rest of their &amp;#39;big six&amp;#39; rivals and look very much the real deal.&lt;/p&gt;\r\n\r\n&lt;p&gt;Odegaard in particular has proved an inspired choice as captain by Mikel Arteta.&lt;/p&gt;\r\n\r\n&lt;p&gt;The 23-year-old Norwegian goes about his work in a quietly effective way, clean in his passing and astute in terms of his positioning, which given his central role is essential.&lt;/p&gt;\r\n\r\n&lt;p&gt;He is a goal threat too. His first was a poacher&amp;#39;s effort as he evaded the attentions of Wolves defenders despite his proximity to the home goal. His second involved superb first-touch control as the ball ran out to him, then a precise finish.&lt;/p&gt;\r\n\r\n&lt;p&gt;Much has been made of Erling Haaland&amp;#39;s likely impact for City after the World Cup, given Norway&amp;#39;s absence means he will be resting when so many influential players are in Qatar. The same is also true of Odegaard.&lt;/p&gt;\r\n\r\n&lt;h3&gt;Lopetegui&amp;#39;s scoring problem&lt;/h3&gt;\r\n\r\n&lt;p&gt;As no Premier League season has reached Christmas Day with so few fixtures played, comparisons to previous years must come with an asterisk.&lt;/p&gt;\r\n\r\n&lt;p&gt;And before Arsenal&amp;#39;s supporters get too excited, it is 1947 since they were top and went on to become champions, which now has to be the aim.&lt;/p&gt;\r\n\r\n&lt;p&gt;At the other end, only three clubs in the Premier League era have escaped the drop after being at the foot of the table.&lt;/p&gt;\r\n\r\n&lt;p&gt;If there is a shining light at the end of that particular tunnel for Wolves, the last team to do it were Leicester, who went on to become champions the following season.&lt;/p&gt;\r\n\r\n&lt;p&gt;Chairman Jeff Shi has less lofty aims judging by his programme notes, where he admitted he doesn&amp;#39;t &amp;#39;expect to start winning straight away&amp;#39;, which is a novel approach.&lt;/p&gt;\r\n\r\n&lt;p&gt;There has been no word from Wolves about Lopetegui&amp;#39;s contract but it would be a major surprise if it did not contain an escape clause on both sides at the end of the season should the managerial change fail to work as hoped.&lt;/p&gt;\r\n\r\n&lt;p&gt;No manager can make a silk purse out of a sow&amp;#39;s ear though. And while Adama Traore&amp;#39;s pace caused Arsenal problems and Goncalo Guedes produced one of his more effective displays, Wolves did not find the net.&lt;/p&gt;\r\n\r\n&lt;p&gt;They have scored only eight times in the league this season, by far the worst return in the top flight.&lt;/p&gt;\r\n\r\n&lt;p&gt;Diego Costa will be back after suspension once domestic combat resumes following Qatar 2022, although whether that will be enough to save Wolves is debatable.&lt;/p&gt;\r\n', '2022-11-11 17:43:11', 'Kristaps', 'uploads/2.jpg'),
(3, 'Brazil v Italy and the day football died', 9, '&lt;p&gt;&lt;strong&gt;In November 2004, Brazilian football legend Socrates made a famous (and short) promotional cameo for English non-league side Garforth Town. As the football correspondent for a leading Brazilian newspaper, I arrived in the West Yorkshire town to write about the madness of it all.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;An interview with the legendary midfielder - known as The Doctor because of his medical degree but also his political engagement - turned into a long after-hours chat at a local pub. Guards and notepads were down as Socrates, always a laid-back character, chatted about football with a sincerity that was remarkable even for him.&lt;/p&gt;\r\n\r\n&lt;p&gt;It was at that pub, such an unusual setting and so far from his comfort zone, that Socrates made a striking admission: he had never watched back Brazil&amp;#39;s 3-2 defeat by Italy in the 1982 World Cup - none of it. He just couldn&amp;#39;t bear to.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;I just don&amp;#39;t need to go through that game again,&amp;quot; he said. And it is quite likely that refusal remained until January 2011, when he died at the age of 57.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;That game&amp;quot; was a World Cup classic played on a hot Barcelona afternoon 40 years ago. One of the most feted generations of Brazilian footballers saw their dreams shattered by an Italian side that transformed over the tournament, putting a stuttering start behind them on the way to demolishing West Germany in the final.&lt;/p&gt;\r\n\r\n&lt;p&gt;With the passing of time, many older Brazilian fans have mellowed, but on 5 July 1982 the feeling was that a crime against football had been committed.&lt;/p&gt;\r\n', '2022-11-11 17:44:11', 'Kristaps', 'uploads/_127566774_socrates_rex.jpg'),
(4, 'Batman voice actor Kevin Conroy dies aged 66', 10, '&lt;p&gt;&lt;strong&gt;Kevin Conroy, who is best known for voicing Batman, has died aged 66.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;He first played Bruce Wayne 30 years ago in Batman: The Animated Series and went on to appear in a number of TV shows, feature films and video games.&lt;/p&gt;\r\n\r\n&lt;p&gt;He also voiced the superhero in the video games Arkham Knight and Arkham City and also appeared in a 2019 episode of Batwoman.&lt;/p&gt;\r\n\r\n&lt;p&gt;His agent Steven Neibert told the BBC: &amp;quot;The voiceover community lost one of the greats.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;I am completely devastated as I worked with him for over 25 years.&amp;quot;&lt;/p&gt;\r\n\r\n&lt;p&gt;Conroy was described as a &amp;quot;dear friend&amp;quot; by casting director Andrea Romano.&lt;/p&gt;\r\n\r\n&lt;p&gt;She added that: &amp;quot;Kevin&amp;#39;s warm heart, delightfully deep laugh and pure love of life will be with me forever.&amp;quot;&lt;/p&gt;\r\n\r\n&lt;p&gt;DC Comics said they were &amp;quot;deeply saddened&amp;quot; by the news.&lt;/p&gt;\r\n', '2022-11-11 17:45:11', 'Kristaps', 'uploads/_127605718_gettyimages-1179414363.jpg'),
(5, 'Joni Mitchell says her music upset male artists in', 10, '&lt;p&gt;&lt;strong&gt;Joni Mitchell has said her music did not get the recognition it deserved in the 1970s due to music industry sexism.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;The musician, whose introspective, confessional songs became touchstones of the singer-songwriter genre, said she &amp;quot;took a lot of flak&amp;quot; at the time.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;People thought that it was too intimate,&amp;quot; the 79-year-old said in a rare interview with Sir Elton John.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;I think it upset the male singer-songwriters. They&amp;#39;d go, &amp;#39;Oh no. Do we have to bare our souls like this now?&amp;#39;&amp;quot;&lt;/p&gt;\r\n\r\n&lt;p&gt;She added: &amp;quot;I think it made people nervous.&amp;quot;&lt;/p&gt;\r\n\r\n&lt;p&gt;The star said she was pleased that contemporary artists seemed better equipped to express the feelings of loss and sorrow that she explored on landmark albums like Ladies of the Canyon (1970) and Blue (1971).&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;It took to this generation, they seem to be able to face those emotions more easily than my generation,&amp;quot; she told Sir Elton in an interview for his Rocket Hour radio show on Apple Music.&lt;/p&gt;\r\n\r\n&lt;p&gt;It is one of the singer&amp;#39;s first full-length interviews since recovering from a brain aneurysm in 2015, which temporarily left her unable to walk and talk.&lt;/p&gt;\r\n\r\n&lt;p&gt;The pair became friends during Mitchell&amp;#39;s rehabilitation, when she hosted &amp;quot;Joni Jams&amp;quot; with fellow musicians in her California living room.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;Music has helped you so much,&amp;quot; said Sir Elton, as he described her &amp;quot;incredible&amp;quot; recovery.&lt;/p&gt;\r\n', '2022-11-11 17:46:11', 'Kristaps', 'uploads/_127604460_gettyimages-113247081.jpg'),
(6, 'Chris Rock to host Netflix&#039;s first live show', 10, '&lt;p&gt;&lt;strong&gt;Comedian Chris Rock is to host Netflix&amp;#39;s first ever live streamed show, as the company begins to experiment with screening live events.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;A stand-up special by Rock will be available around the world as it happens in early 2023.&lt;/p&gt;\r\n\r\n&lt;p&gt;It could open the door for more live content on Netflix - like sport, real-time reality TV and other major events.&lt;/p&gt;\r\n\r\n&lt;p&gt;Until now, must-see live programming has remained an area where traditional broadcasters still have dominance.&lt;/p&gt;\r\n\r\n&lt;p&gt;Robbie Praw, Netflix vice president of stand-up and comedy formats, said Rock was &amp;quot;one of the most iconic and important comedic voices of our generation&amp;quot;.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;We&amp;#39;re thrilled the entire world will be able to experience a live Chris Rock comedy event and be a part of Netflix history,&amp;quot; he added. &amp;quot;This will be an unforgettable moment and we&amp;#39;re so honoured that Chris is carrying this torch.&amp;quot;&lt;/p&gt;\r\n\r\n&lt;p&gt;Rock was at the centre of one of the biggest live TV moments this year - when he was slapped on stage by Will Smith at the Oscars. The ceremony is broadcast by the ABC TV network in the US and on Sky in the UK.&lt;/p&gt;\r\n', '2022-11-11 17:47:11', 'Kristaps22', 'uploads/_127602249_rock_reu2.jpg'),
(7, 'Why is the UK struggling more than other countries', 11, '&lt;p&gt;&lt;strong&gt;In isolation, a modest slide in the economy of 0.2% over three months might fall into the category of regrettable but unsurprising in the circumstances.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;But looking ahead, the Bank of England and others anticipate that this is the first of a run of several quarters marking the start of a lengthy recession. And looking backwards now, it is very concerning that the UK economy remains smaller than just before the pandemic three years ago.&lt;/p&gt;\r\n\r\n&lt;p&gt;Not only is the UK the only major economy to be&amp;nbsp;shrinking in the three months to September, but it is the only one not to have recovered in full the chunk of the economy lost during the pandemic. Amazingly, the UK still has an economy 0.4% smaller than in the quarter before the pandemic in Q4 2019.&lt;/p&gt;\r\n', '2022-11-11 17:42:12', 'Kristaps', 'uploads/_127597086_gettyimages-1271705122.jpg'),
(8, 'Twitter drama continues with blue-tick confusion', 11, '&lt;p&gt;&lt;strong&gt;Twitter halted its new $8 blue tick subscription offering on Friday in the latest head spinning reversal at the social media platform since billionaire Elon Musk bought the company.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;The move came as a number of accounts impersonating big brands received the blue tick, previously a signal that the firm had verified the user as real.&lt;/p&gt;\r\n\r\n&lt;p&gt;In one instance, a user claiming to be drugs firm Eli Lilly said &amp;quot;insulin was free&amp;quot;.&lt;/p&gt;\r\n\r\n&lt;p&gt;Twitter did not comment.&lt;/p&gt;\r\n\r\n&lt;p&gt;The incident added to the concerns about how Mr Musk&amp;#39;s leadership was affecting the spread of misinformation on the platform.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;We apologize to those who have been served a misleading message from a fake Lilly account,&amp;quot; Eli Lilly tweeted a few hours after the prank post went up on Thursday, reiterating the name of its real Twitter handle.&lt;/p&gt;\r\n\r\n&lt;p&gt;The firm&amp;#39;s shares fell 4% on Friday amid the confusion.&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Twitter boss Elon Musk told he&amp;#39;s &amp;#39;not above the law&amp;#39;&lt;/li&gt;\r\n	&lt;li&gt;Musk tells Twitter staff remote working will end&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p&gt;US-based PR strategist Max Burns said he had seen fake accounts with the verified blue tick badge bought through Twitter Blue posing as support accounts for real airlines and asking customers who were trying to contact them on Twitter to direct message the fake accounts instead.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;How long until a prankster takes a real passenger&amp;#39;s ticket information and cancels their flight? Or takes their credit card info and goes on a spending spree?&amp;quot; he said.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;It will only take one major incident for every airline to bail on Twitter as a source of customer engagement.&amp;quot;&lt;/p&gt;\r\n\r\n&lt;p&gt;Mr Musk completed his $44bn purchase of Twitter late last month, and swiftly set about overhauling the company.&lt;/p&gt;\r\n\r\n&lt;p&gt;He has fired roughly 3,700 people - about half of the company&amp;#39;s former staff - and pushed the firm to focus on finding ways other than advertising to make money.&lt;/p&gt;\r\n\r\n&lt;p&gt;His first email to employees warned: &amp;quot;The road ahead is arduous and will require intense work to succeed.&amp;quot;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;Without significant subscription revenue, there is a good chance Twitter will not survive the upcoming economic downturn,&amp;quot; he said.&lt;/p&gt;\r\n', '2022-11-11 17:43:13', 'Kristaps', 'uploads/_127603930_gettyimages-1240294770.jpg'),
(9, 'Crypto giant FTX collapses into bankruptcy', 11, '&lt;p&gt;&lt;strong&gt;Embattled cryptocurrency exchange FTX has filed for bankruptcy in the US, seeking court protection as it looks for a way to return money to users.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Former boss Sam Bankman-Fried has also stepped down as chief executive, the company said.&lt;/p&gt;\r\n\r\n&lt;p&gt;It is a massive turn of fortunes for the 30-year-old, who had headed the world&amp;#39;s second largest crypto exchange.&lt;/p&gt;\r\n\r\n&lt;p&gt;In just over a week, his FTX empire has collapsed, shaking confidence in the already troubled crypto market.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;I&amp;#39;m really sorry, again, that we ended up here. Hopefully things can find a way to recover,&amp;quot; Mr Bankman-Fried, nicknamed the &amp;#39;King of Crypto&amp;#39;, wrote on Twitter on Friday.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;I was shocked to see things unravel the way they did.&amp;quot;&lt;/p&gt;\r\n', '2022-11-11 17:44:14', 'Kristaps', 'uploads/_127562654_ftx.jpg'),
(10, 'Musk tells Twitter staff remote working will end', 12, '&lt;p&gt;&lt;strong&gt;Elon Musk has told Twitter staff that remote working will end and &amp;quot;difficult times&amp;quot; lie ahead, according to reports.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;In an email to staff, the owner of the social media firm said workers would be expected in the office for at least 40 hours a week,&amp;nbsp;Bloomberg reported.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mr Musk added that there was &amp;quot;no way to sugar coat the message&amp;quot; that the slowing global economy was going to hit Twitter&amp;#39;s advertising revenues.&lt;/p&gt;\r\n\r\n&lt;p&gt;The BBC has contacted Twitter for comment.&lt;/p&gt;\r\n\r\n&lt;p&gt;The San Francisco-based company told its staff in May 2020 that they could&amp;nbsp;work from home &amp;quot;forever&amp;quot; if they wished to, because the company believed its remote working measures during Covid lockdowns had been a success.&lt;/p&gt;\r\n\r\n&lt;p&gt;But Mr Musk has been on the record as having a dim view of remote work, writing on the site he now owns earlier this year that &amp;quot;all the Covid stay-at-home stuff has tricked people into thinking that you don&amp;#39;t actually need to work hard. Rude awakening inbound!&amp;quot;&lt;/p&gt;\r\n\r\n&lt;p&gt;In June, Mr Musk, who also is the boss of Tesla, told staff at the electric car maker that&amp;nbsp;working remotely was no longer acceptable.&lt;/p&gt;\r\n\r\n&lt;p&gt;Like at Tesla, the entrepreneur said he would only grant exemptions personally for Twitter staff who want to work remotely.&lt;/p&gt;\r\n\r\n&lt;p&gt;The world&amp;#39;s richest man has already announced half of Twitter&amp;#39;s staff were being let go, a week after he bought the company in a $44bn (&amp;pound;38.7bn) deal.&lt;/p&gt;\r\n\r\n&lt;p&gt;Mr Musk said he had &amp;quot;no choice&amp;quot; over the cuts as the company was losing $4m (&amp;pound;3.51m) a day. He has blamed &amp;quot;activist groups pressuring advertisers&amp;quot; for a &amp;quot;massive drop in revenue&amp;quot;.&lt;/p&gt;\r\n', '2022-11-11 17:45:15', 'Kristaps', 'uploads/_127524204_musk.jpg'),
(11, 'Russians kept in the dark by internet search', 12, '&lt;p&gt;&lt;strong&gt;In many places, searching the web is a gateway to a wider world of information, but in Russia, it is part of a system that helps trap people in an alternative reality.&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Shortly after 20 people were killed in&amp;nbsp;a Russian missile attack on the Ukrainian city of Kremenchuk&amp;nbsp;in June, Lev Gershenzon - a former manager at Russian tech company Yandex - typed the city&amp;#39;s name into its search engine to find out more.&lt;/p&gt;\r\n\r\n&lt;p&gt;The results he got back shocked him.&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;quot;The sources that ranked at the top of the page were strange and obscure,&amp;quot; he told the BBC. &amp;quot;There was one blog by an unknown author claiming that the information about casualties was fake.&amp;quot;&lt;/p&gt;\r\n\r\n&lt;p&gt;The Kremlin keeps a tight grip on the country&amp;#39;s media, especially TV, which glorifies Russia&amp;#39;s invasion of Ukraine as a mission of liberation and dismisses reports of atrocities as fake.&lt;/p&gt;\r\n\r\n&lt;p&gt;The internet in Russia was for a long time the main space for alternative sources of information, but after starting the war in February the Kremlin launched a crackdown on independent online media.&lt;/p&gt;\r\n\r\n&lt;p&gt;Digital rights watchdog Roskomsvoboda estimates that - in the first six months of the conflict - nearly 7,000 websites were blocked in Russia, including those of major independent media and human rights groups.&lt;/p&gt;\r\n', '2022-11-11 17:46:16', 'Kristaps', 'uploads/_127257351_yandex_index_3_976-nc.png');

-- --------------------------------------------------------

--
-- Table structure for table `news_images`
--

CREATE TABLE `news_images` (
  `id` int(11) NOT NULL,
  `img_url` text NOT NULL,
  `news_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_images`
--

INSERT INTO `news_images` (`id`, `img_url`, `news_id`) VALUES
(1, 'img/news-350x223-1.jpg', 1),
(2, 'img/news-350x223-2.jpg', 2),
(3, 'img/news-350x223-3.jpg', 3),
(4, 'img/news-350x223-4.jpg', 4),
(5, 'img/news-350x223-5.jpg', 5),
(6, 'img/news-350x223-1.jpg', 6),
(7, 'img/news-350x223-2.jpg', 7),
(8, 'img/news-350x223-3.jpg', 8),
(9, 'img/news-350x223-4.jpg', 9),
(10, 'img/news-350x223-5.jpg', 10),
(11, 'img/news-350x223-1.jpg', 11),
(12, 'img/news-350x223-2.jpg', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_images`
--
ALTER TABLE `news_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news_images`
--
ALTER TABLE `news_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
