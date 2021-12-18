-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2021 at 07:12 AM
-- Server version: 5.7.36
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maamarts_maamarts`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_image` varchar(255) NOT NULL,
  `about_content` longtext NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_image`, `about_content`, `status`, `created_at`, `updated_at`) VALUES
(6, '1601727237.jpg', '<p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"line-height: 107%;\" arial\",\"sans-serif\";mso-bidi-font-weight:bold\"=\"\"><font size=\"3\">From the face of it, Ma’am Arts is a Government recognized STAR export house in Jaipur (India), but the real Ma’am Arts story is full of Sweat, Blood & Glory - of a family, that long ago dreamt of being a market leader in Jaipur, with a humble beginning of just 10 sewing machines, in the garment manufacturing business, against all odds.\r\n<o:p></o:p></font></span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size: medium;\">Our Director, Mr. Rajiv Dewan started this special journey of hard work and success, back in 1988, and having seen potential ended up calling his brother and our Director, Mr. Rakesh Dewan, to join him in 1991. Over the course of the next 3 decades, the dream has been brought to fruition by sheer will, determination and vision, by making Ma’am Arts one of the best garment manufacturers.</span><br></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size: medium;\">Today, we have 3 state of the art units, with 1000 sewing machines, producing over 2,50,000 garments per month - by doing ethical, cost effective and quality production. This places us in strategic partnerships with our clients from across 27 countries and makes the name Ma’am Arts a synonym for trust and leaders of adaptability.</span><br></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size: medium;\">With the introduction of Mr. Jigar Dewan in 2010, we have been a market leader in innovative manufacturing practices and ensuring on time delivery, while with Mr. Avyay Dewan joining the business in 2018, has solidified our designing and creativity quotient based on international design inputs.</span><br></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size: medium;\">Over the course of this journey, what has not changed is the fundamentals of inclusive growth of everyone associated with Ma’am Arts; care for the society and environment; quality of the product and customer delight.</span><br></p>', '1', '2020-08-22 12:00:15', '2020-08-22 12:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `metakeywords` varchar(255) NOT NULL,
  `metadescription` longtext NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `metakeywords`, `metadescription`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(9, 'DENIM: AN IMPERISHABLE BEAUTY', 'What makes denim an imperishable beauty is the perfect amalgamation of comfort and style.\r\nFor the love of denim that never fades, from the streets to runway fashion, from daily fashion staples to\r\nexclusive red carpet glam, from the days of the original gold miners till present times, Denim has seen a\r\njourney through time. From the 40s war to the 50s rise to fame, from the 60s hippie revolution to the\r\n80s rise of designer denims, from the 90s hip hop to the 2000s DIY denim; Denim continues to hold a\r\nfuture sustainable in spirit but classic in form.\r\nOn the list of wardrobe must-haves, denim scores high. A wardrobe remains incomplete without a pair\r\nof denims. Forget the common pair of jeans, most wardrobes include denim jackets, skirts, shirts,\r\nfootwear, fashion accessories and even saris made from denim. Denim has perhaps become the most\r\nessential fabric that adds a certain spirit to the closet.\r\nDenim is more than just a cotton fabric; it has an exciting history. The revolution of denim is not just\r\nseen in its story but in the lives of historians and researchers, designers and artists, teenagers and movie\r\nstars, reporters and writers. Denim is one of the world’s oldest fabrics, yet it remains eternally young\r\nand an ignite topic to debate and write about. Denim has excelled the boundaries from being hardwearing work clothes into feminine silhouettes. Denim is like a blank canvas having unlimited\r\npossibilities.', 'Denim, Classics, Sustainbility', 'Find out more about the classics which is never out of fashion.', 'denim:-an-imperishable-beauty', '1614753443.png', '0', '2021-03-03 06:37:23', '2021-03-12 12:24:11'),
(8, 'DOUBLE DENIM: THE ALL BLUE LOOK', 'Forget the rules if you like it wear it!\r\nThere’s something about the all-blue look that looks phenomenal. Double denim is a known phenomenon widely associated with the 70s, 80s and 90s trend, but has made a huge comeback in the fashion stakes over the past year.\r\nDenim on denim is one of a fashion trend that has been around for years, and that won’t be going anywhere anytime soon. Probably because Double denim is challengingly a tricky game to play and with the right design and styling it can be your fashion statement.', 'Denim, Classics, Sustainability, Double Denim', 'Find out more about the classics which is never out of fashion.', 'double-denim:-the-all-blue-look', '1614752025.png', '0', '2021-03-03 06:13:45', '2021-03-12 12:24:23'),
(10, 'LITTLE DO YOU KNOW: INNOVATION AND DENIM', 'The list is never ending when it comes to innovations in denim. Over the course of time,\r\ndenim has seen tons of changes in design and pattern. Denim has been blamed for the\r\nenvironment damage and therefore this industry is tagged as one of the dirtiest. The\r\nlatest innovation aims at sustainability which include methods that save water and\r\nenergy resulting in less wastage.\r\nFrom the 17th century to the present, denim has been woven and ribbed, used and\r\ndiscarded; made into upholstery, recycled and reused, hand sanding and layering,\r\nembroidery and hand painting, patchwork and applique, digital printing, various\r\nwashes and dyeing techniques, etc., Denim still has a long way to go.', 'Denim, Classics, Sustainbility', 'Find out more about the classics which is never out of fashion.', 'little-do-you-know:-innovation-and-denim', '1614768045.png', '0', '2021-03-03 10:40:45', '2021-03-12 12:24:35'),
(11, 'EMBROIDERY- THE ART OF NEEDLEWORK', 'Embroidery, an art form that holds the beauty to needle the elements and colors of the divine nature and religion. Indulge in the art of ornamental needlework. The sacred form of art that dates back to pre-historic times, a rich and varied tradition that has been seen as a mark of wealth and status. A widely practiced form of decorative, or applied art, in which a design and its rendering are executed by hand (with a needle, sometimes a hook) or with machine on various textiles, varying from leather, felt, cotton, or silk, with threads or yarn of linen, cotton, wool, silk and also with hair, with additional use of ornamental elements like beads, pearls, precious stones, sequins, coins, and so on.\r\nThe transition of this art form began since earliest times from the stones and bones, then to the bronze, and later to the steel. Its evolution may be traced from the ancient artifacts of ancient civilization. Embroidery in India includes dozens of regional styles that vary by region and are applied on varied clothing styles. Inspiration is taken from nature and religious beliefs – colors, themes and styles vary across different states and regions. The types of stitches and techniques are infinitely various. This form of art and its techniques has been passed from generation to generation. Its authenticity depends upon the aesthetic properties of the material, employment of the design to complement the impression of the stitches, and creating effects along with texture through the combination of the design, colors and elements. Embroidery could be the domain of a few experts or a widespread from the royal to the mundane, depending on time, location and materials available.', 'embroidery,  needlework,', 'Embroidery, A little bit about this sacred art form that dates  back to pre-historic times.', 'embroidery--the-art-of-needlework', '1614847227.png', '0', '2021-03-04 08:40:27', '2021-03-12 12:24:51'),
(12, 'EMPOWER THE POWER', 'The COVID-19 pandemic has quickly transformed from a global health crisis into a financial crisis, particularly for low-income female workers in global supply chains. However, MA\'AM Arts stepped forward to support female workers to protect their health and strengthen their financial resilience.\r\n\r\nBorn with amazing potential, women\'s are all miraculous beings capable of creating miracles with limitless imagination, along with the willpower to make things tangible. The women\'s being the cycle and rhythm of supreme power and authority, MA\'AM Arts here is creating a full circle of freedom.\r\n\r\nTo recall, as a woman, you have defined, redefined and conducted the history of the world since countless lifetime. As a woman, you have created and raised this world while conducting different roles. As a woman too, you will drive this world into an empowered future of freedom for yourself!\r\nWe at Ma’am Arts, bow down to the women around the world for the various roles they play for making the world a better place to live in.', 'women empowerment', 'To bow down to the women around the world for their existence.', 'empower-the-power', '1614851525.png', '1', '2021-03-04 09:52:05', '2021-03-04 09:59:27'),
(13, 'EXQUISITE HAND EMBROIDERY', 'Embroidery, an art form that holds the beauty to needle the elements and colors of the divine nature and religion. Hand embroidery uses a variety of sewing techniques to create different kinds of embroidery stitches. Almost all types of fabric can be used for hand embroidery. However, the commonly used fabrics for hand embroidery are linen, satin, cotton, silk, crepes, georgette, chiffon, velvet, Terri-cot, polyester, etc.\r\nWe at Ma’am arts take sheer delight with our in-house development facilities for different types of hand embroidery stitches and techniques. \r\nMa’am Arts illustrates the idea of bringing the hand embroidered aesthetics into your wardrobe. Constructing designs that are a peaceful blend of contemporary & functional qualities, we deliver the perfect balance of style with a dedicated value for comfort, uncompromised quality & design.\r\nExplore the wonderful world of hand embroidery with Ma’am Arts.', 'embroidery, needlework, handwork', 'Embroidery, A little bit about this sacred art form that dates  back to pre-historic times.', 'exquisite-hand-embroidery', '1614851832.png', '0', '2021-03-04 09:57:12', '2021-03-12 12:25:03'),
(14, 'BLOOM- FOR THE SUN-FILLED SPRING', 'Synonymous with spring-summer, soft and vivacious prints have always been a sweetheart to the fashion mavens. For the contemporary fashion lover(s), Ma’am Arts brings intensely vivid graphic blooms - to take inspiration from, before you step out this season. \r\n\r\nBe it the beautiful botanicals, playful tropical or the flower power, we’d suggest going for any of these prints to complete your summer staple. Grab these classics, for you know that they’ll keep coming back; time and again. Raise your style quotient with our green tropical co-ords or the flirty sun-filled dresses, accessorize them with the right summer add-ons and, you’re ready to chase the sunshine. \r\n\r\nDitsy or bold, delicate or wild, vibrant or muted; Ma’am Arts takes the lead to embrace the exquisite blooms in an array of eclectic collection. We’ve rounded up 5 of our favorites, with playful necklines and flowy silhouettes; that would last beyond this spring-summer. \r\nWait no more, put on the prints play right away.', 'Spring-summer, tropical prints, floral prints', 'Prints for the sun-filled spring.', 'bloom--for-the-sun-filled-spring', '1615551833.png', '1', '2021-03-12 12:23:53', '2021-03-13 05:20:15'),
(15, 'ESSENTIALS: WHEN IN NEED OF VITAMIN SEA', 'Good News: We’ve got some perfect stuff for the lovers of the sun. \r\n\r\nIts summer once again, though pandemic time is right up here - the best escape anyone can have now is some sand and waves below the feet; the pleasant sun above the head, along with some icy lemonade in hand. Taking all the safety measures, why not start planning for it already? Here’s a range of a few beachwear pieces including kaftans and shrugs, for your next beach vacay exclusively from Ma’am Arts. \r\nWe know how important it is for every woman to feel confident every time, and a great beachwear goes a long way to helping you look and feel gorgeous. At Ma’am Arts, we are proud to stock some of the Beachwear collections to flatter the confident YOU. To help you feel your best, we have put together a little compilation. Choose away the best pieces and flaunt your style this summer with confidence! \r\nHere, wait no more let’s start planning for your next beach vacation with some floral, abstract, and tropical prints and embroidery; to make you 100% beach-ready.', 'Beachwear, Kaftan, Shrug, Embroidery, Prints, Digital Print, Export House', 'Beachwear collection of kaftaan and shrugs.', 'essentials:-when-in-need-of-vitamin-sea', '1615800473.png', '1', '2021-03-15 09:27:53', '2021-03-15 09:27:53'),
(16, 'MARCH EDIT - TRANSITIONAL DRESSING', 'Let’s jump start the transition! Feel the chill in the air: befriend the fun in a clime so fickle.\r\nBefore you bid adieu to the winter woes. Snuggle in some quilts and exquisite embroidery dipped in detectable colors and prints, adorned with tassels and buttons, butter-soft fabrics and gentle fit. It’s a month of melting snow and brighter sun. It’s the time to stay warm in the coolest way. For you still might feel the evening breeze in sunny afternoons. \r\nHere’s for you a range of jackets from full sleeves to sleeveless to transcend the high fashion look, casual look, or the festive look. Style these handcrafted beauty with Kurtis, tops, dresses, or almost anything to ace the transitional look this season.', 'TRANSITIONAL DRESSING, QUILTED JACKETS, HANDWORK, PRINTS,  SPRING SUMMER, EXPORT HOUSE', 'Confused between sun-filled days and chilly evenings? Ma\'am Arts is here to solve the puzzle of flicking weather.', 'march-edit---transitional-dressing', '1616406644.png', '1', '2021-03-22 09:50:44', '2021-03-22 09:51:49'),
(17, 'Double Denim: How to pull off the look', 'Your trusties Denim, is yet again re-imagined when it comes to the classic all blue look. Denim says, “Forget the rules if you like it wear it!” \r\nThere’s something about this look that looks phenomenal. Double denim, a sensation widely associated with the 70s - 90s trend, but has made a huge comeback in the fashion stakes over the past year, and that won’t be going anywhere anytime soon. Probably because Denim on denim is challengingly a tricky game to play, and with the right design and styling it can be your everyday fashion statement.\r\nWith a range of denim styles specially designed to rock on and glorify your charm, from jackets to tops, from overalls to jeans we’ve stock it all. We have fit and flare, print and wash, embroidered and distressed – everything for every style. A tip before, play with colors by paring different shades of denim, avoid adding denim accessories, do play with silhouettes, add some distress to our look. Here, we’ve made the struggle easy, Mix and match with the compiled range to score the look. \r\nUpdate your everyday wardrobe with a range of flattering denim styles. Ma’am arts is here to deliver the edit right away.', 'Denim, Classics, Sustainability, Double Denim, Denim on Denim', 'A guide to make your all blue look an everyday statement.', 'double-denim:-how-to-pull-off-the-look', '1618483741.jpg', '1', '2021-04-15 10:49:01', '2021-04-15 10:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `categorymaster`
--

CREATE TABLE `categorymaster` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_heading` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorymaster`
--

INSERT INTO `categorymaster` (`id`, `page_title`, `page_heading`, `created_at`, `updated_at`) VALUES
(3, 'All Stories', 'THE HOTTEST GLOBAL TRENDS', '2020-09-18 12:00:29', '2020-09-18 12:00:29'),
(2, 'All Stories', 'THE HOTTEST GLOBAL TRENDS', '2020-09-18 11:50:37', '2020-09-18 11:50:37'),
(4, 'All Stories', 'Chic & Fiery!', '2020-09-28 09:17:29', '2020-09-28 09:17:29'),
(5, 'All Stories', 'F i e r y  &  Chic!', '2020-09-28 09:41:40', '2020-09-28 09:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `para` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `para`, `created_at`, `updated_at`) VALUES
(4, 'It has been almost 3 decades since we started this beautiful journey with our special alliances with the clients. Our endeavor towards doing ethical, cost effective and quality production along with our strive for continuous improvement, places us in an ever-lasting partnership with our customers. \r\nSpread across 27 countries across the globe, from Australia to Canada and from Tokyo to LA, our domestic and international clientele list includes some of the biggest names and brands of the fraternity, making the name Ma’am Arts - a synonym for trust and leaders of adaptability. Their faith and trust in us through their testimonies, say a lot about who we are and what we prioritize.', '2020-09-12 11:56:00', '2020-10-02 09:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `clientslogo`
--

CREATE TABLE `clientslogo` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientslogo`
--

INSERT INTO `clientslogo` (`id`, `title`, `logo`, `created_at`, `updated_at`) VALUES
(2, 'DW Shop', '1600076020.png', '2020-09-12 06:58:54', '2020-09-14 09:33:40'),
(3, 'Patrons of Peace', '1600076070.png', '2020-09-12 06:59:10', '2020-09-14 09:34:30'),
(4, 'Marie Claire', '1600076110.png', '2020-09-12 08:03:55', '2020-09-14 09:35:10'),
(5, 'Natura', '1600076166.jpeg', '2020-09-12 08:04:25', '2020-09-14 09:36:06'),
(6, 'Triburg', '1600076200.png', '2020-09-12 08:04:45', '2020-09-14 09:36:40'),
(7, 'Shop Luba', '1600076259.jpg', '2020-09-12 08:05:32', '2020-09-14 09:37:39'),
(8, 'Hotel-shops', '1600076304.jpg', '2020-09-12 08:05:50', '2020-09-14 09:38:24'),
(9, 'Alme Paris', '1600076358.png', '2020-09-12 08:06:17', '2020-09-14 09:39:18'),
(10, 'Global Desi', '1600076408.png', '2020-09-12 08:06:35', '2020-09-14 09:40:08'),
(11, 'AND', '1600076455.png', '2020-09-12 08:06:56', '2020-09-14 09:40:56'),
(12, 'Westside', '1600076491.png', '2020-09-12 08:07:11', '2020-09-14 09:41:31'),
(13, 'Pantaloons', '1600076542.jpg', '2020-09-12 08:07:40', '2020-09-14 09:42:22'),
(14, 'Max', '1600076574.png', '2020-09-12 08:08:30', '2020-09-14 09:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `template` enum('1','0') NOT NULL DEFAULT '1',
  `description` longtext,
  `metakeywords` varchar(255) DEFAULT NULL,
  `metadescription` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `advancedcontent` longtext,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `slug` varchar(255) NOT NULL,
  `pageorder` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `title`, `image`, `template`, `description`, `metakeywords`, `metadescription`, `position`, `advancedcontent`, `status`, `slug`, `pageorder`, `created_at`, `updated_at`) VALUES
(20, 'Quality', '16034323281.jpg', '1', '<p style=\"margin-top: 5px; text-align: justify; font-stretch: normal; line-height: normal;\"><font face=\"arial\" size=\"2\">For Ma’am Arts, an average product with a high-quality value is always preferable than a good one with little to no quality standard. Quality for us is a habit that we have cultivated over a long time. Our urge to manufacture high merit products has sustained and added a stream of clients for over a quarter century.&nbsp;</font></p>\r\n<p style=\"margin-top: 5px; text-align: justify; font-stretch: normal; line-height: normal;\"><font face=\"arial\" size=\"2\">We follow a three-tiered pre-emptive quality policy to achieve finest result in product performance. &nbsp;</font></p>\r\n<p style=\"margin-top: 5px; text-align: justify; font-stretch: normal; line-height: normal;\"><font face=\"arial\" size=\"2\"><b>Stage 1</b> – We include a trailblazing department by the name of – Research and Development. Guaranteeing the right product in the first go requires our R&amp;D team to carefully strategize its approach. The team studies and analyses the risk(s) for each technicality (risk-analysis) in the garment. The team then imparts the respective in-depth information to all the relevant departments by arranging a Pre- Production Meeting (PPM).</font></p>\r\n<p style=\"margin-top: 5px; text-align: justify; font-stretch: normal; line-height: normal;\"><font face=\"arial\" size=\"2\"><b>Stage 2</b> – In order to satisfy our hunger for a valuable product – our factory has installed Quality Management System (QMS) in our sewing department - an automated system that aims to identify, analyze and correct the defects thereby enhancing the worth of the product.&nbsp;</font></p>\r\n<p style=\"margin-top: 5px; text-align: justify; font-stretch: normal; line-height: normal;\"><font face=\"arial\" size=\"2\"><b>Stage 3</b> – Every garment requires a different finishing criterion for its end use and no compromise can be endured in the finishing process. Arranging a Pre- Finishing Meeting (PFM) before the garments are transferred to the last but vital process, assures that the products are top-notch with respect to quality. The PFM takes into consideration the ironing criteria and the critical A zone of garments.&nbsp;</font></p>\r\n<p style=\"text-align: justify; font-stretch: normal; line-height: normal;\"><font face=\"arial\" size=\"2\">Quality is a basic hygiene, and we leave nothing to chance. Our investment with respect to time and money helps us to ensure that our manufactured garments meet the quality benchmark that we have set for ourselves. For us, quality means doing it right even when no one is looking!</font></p>', 'Ma\'am Arts- A Government Recognised Star Export House', 'Ma\'am Arts- A Government Recognised Star Export House', '1', NULL, '1', 'quality', 3, '2020-09-15 11:04:56', '2020-10-23 10:17:22'),
(30, 'Who We Are.', '16020484351.jpg', '1', '<p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\ntext-align:justify;line-height:normal;mso-outline-level:2\"><b><span lang=\"EN-IN\" style=\"font-size: 18pt;\"><font face=\"comic sans ms\">Wear glam\r\nand let your personality speak for yourself<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\ntext-align:justify;line-height:normal\"><span lang=\"EN-IN\"><font face=\"comic sans ms\" size=\"3\">Clothes symbolize the\r\npersonality of a person. Style with comfort is what MA’AM ARTS believes in. The\r\nexclusive range of styled and designed women clothes that are in pace with the\r\nchanging trends of every day. We are a govt recognized STAR export house in\r\nIndia is one of the best garment manufacturing business.<o:p></o:p></font></span></p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\ntext-align:justify;line-height:normal;mso-outline-level:3\"><b><span lang=\"EN-IN\" style=\"font-size: 13.5pt;\"><font face=\"comic sans ms\">Who we\r\nare?<o:p></o:p></font></span></b></p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\ntext-align:justify;line-height:normal\"><span lang=\"EN-IN\" style=\"font-size: 12pt;\"><font face=\"comic sans ms\">The house of fashion, MA’AM\r\nARTS has not so easily got its recognition. It started out with a family in\r\nJaipur with an ambition of garment manufacturing with only 10 sewing machines.\r\nNow with sheer hard work and efforts of the entire team, we have now more than\r\n1000 sewing machines and producing more than 2,50,000 garments in one single\r\nmonth. We make use of cost effective production. Over the years, our work and\r\nethics haven’t changed and quality is still our priority.<o:p></o:p></font></span></p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\ntext-align:justify;line-height:normal\"><span lang=\"EN-IN\" style=\"font-size: 12pt;\"><font face=\"comic sans ms\">With the state of art\r\nfactories and infrastructure available, we have eminently made a position in\r\nthe garment manufacturing industry. Our marketing and production strategies\r\nhave been only made more signified and solidified with the best leaders for the\r\nfirm. Along with the production of quality products, we also take care of the\r\nenvironment.<o:p></o:p></font></span></p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\ntext-align:justify;line-height:normal\"><span lang=\"EN-IN\" style=\"font-size: 12pt;\"><font face=\"comic sans ms\">We are a team of\r\nprofessional and skilled designers and manufacturers. MA’AM ARTS is the next\r\nname to trust and loyalty among the customers. The entire team of MA’AM ARTS is\r\nfuelled with enthusiasm and creativity in manufacturing the best clothes.<o:p></o:p></font></span></p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\ntext-align:justify;line-height:normal;mso-outline-level:3\"><b><span lang=\"EN-IN\" style=\"font-size: 13.5pt;\"><font face=\"comic sans ms\">What we\r\ndo<o:p></o:p></font></span></b></p><ol start=\"1\" type=\"1\">\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     text-align:justify;line-height:normal;mso-list:l0 level1 lfo1;tab-stops:\r\n     list 36.0pt\"><font face=\"comic sans ms\"><b><span lang=\"EN-IN\" style=\"font-size: 12pt;\">Design</span></b><span lang=\"EN-IN\" style=\"font-size: 12pt;\">- A\r\n     wide range of designers that are skilled in their work. With what is going\r\n     on in trends to what would look more classy, our designers design the\r\n     clothes that catch the eye when worn by anybody. For any apparel, the\r\n     design is the first important factor that comes in mind while shopping.\r\n     Personalized designs with antique and delicate work including the\r\n     embroidery, Zari work, etc is designed deliberately by the designers with\r\n     us. The designers take care of the fabric material, style material, the\r\n     work on material and every single element from choosing the right thread\r\n     to the right color so that what ends is always a masterpiece.<o:p></o:p></span></font></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     text-align:justify;line-height:normal;mso-list:l0 level1 lfo1;tab-stops:\r\n     list 36.0pt\"><font face=\"comic sans ms\"><b><span lang=\"EN-IN\" style=\"font-size: 12pt;\">Quality</span></b><span lang=\"EN-IN\" style=\"font-size: 12pt;\">:\r\n     Quality is what we are known for. We, at MA’AM ARTS, take care of the\r\n     quality of the product first so that the customers are happy with what\r\n     they get from us. Multiple chains of quality checks are made by the\r\n     apparel and fashion experts so that there is no compromise with the\r\n     quality of the product.<o:p></o:p></span></font></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     text-align:justify;line-height:normal;mso-list:l0 level1 lfo1;tab-stops:\r\n     list 36.0pt\"><font face=\"comic sans ms\"><b><span lang=\"EN-IN\" style=\"font-size: 12pt;\">Manufacturing</span></b><span lang=\"EN-IN\" style=\"font-size: 12pt;\">- We\r\n     have the latest manufacturing systems that meet the requirements and\r\n     demands. Separate departments for the complete production with completely\r\n     trained staff to enhance the manufacturing process of the clothes. Our\r\n     wide range of machines and team of enthusiastic employees that are\r\n     dedicated to their work makes it possible to achieve a goal of more than\r\n     2,50,000 garments in a single month.<o:p></o:p></span></font></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     text-align:justify;line-height:normal;mso-list:l0 level1 lfo1;tab-stops:\r\n     list 36.0pt\"><font face=\"comic sans ms\"><b><span lang=\"EN-IN\" style=\"font-size: 12pt;\">Sustainability</span></b><span lang=\"EN-IN\" style=\"font-size: 12pt;\">-\r\n     The ultimate reason why we are at the top of the industry is our\r\n     sustainability. Our trustworthy products, employees and other\r\n     professionals have made a strong image in the apparel industry. In Jaipur,\r\n     we have got Certifications by The US customs and granted C-TPAT. Thus, by\r\n     ensuring a safe environment for employees and the organization, we make\r\n     sure that the organization runs in a safe, smooth and sustained manner.<o:p></o:p></span></font></li>\r\n</ol><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\ntext-align:justify;line-height:normal\"><span lang=\"EN-IN\" style=\"font-size: 12pt;\"><font face=\"comic sans ms\">MA’AM ARTS is not only a\r\nname but also a trust factor that people look for. Our exclusive range of\r\ndesigned women apparel is loved by all categories. Shop us with now to stay in\r\ntrends with the trendiest and classic collection of women apparels at MA’AM\r\nARTS.<o:p></o:p></font></span></p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\ntext-align:justify;line-height:normal;mso-outline-level:2\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"text-align:justify\"><o:p><font face=\"comic sans ms\">&nbsp;</font></o:p></p>', 'A Govt. Recognized STAR Export House', 'Women\'s Wear Manufacturers', '2', NULL, '1', 'who-we-are.', 0, '2020-10-07 05:27:17', '2020-10-23 06:46:03'),
(35, 'Design', NULL, '0', NULL, 'Ma\'am Arts- A Government Recognised Star Export House', 'Ma\'am Arts- A Government Recognised Star Export House', '1', '{\"b1image\":\"160345164131.jpg\",\"b1content\":\"Style is always a way to say who you are without having to speak. Ma\\u2019am Arts offers styles which are season-less and limit-less. We believe that design is the essence of any apparel. It is so much more than what meets the eye and says further about the brand rather than just the garment flaunting it. Our team of highly qualified, creative, and passionate designers and merchandisers understands this and beautifully incorporates it in each style. While we emphasis on the aesthetics of the garment, we do attempt at being peerless at every step.\\r\\n\\r\\nAs a company, we are always investing in new technologies and methods to stay relevant in a constantly changing world. No latest fashion in the apparel market has ever been spared from the eyes of our creative team!\",\"b2heading\":\"Design\",\"b2title\":\"Personalisation In Designing\",\"b2image\":\"160344756832.png\",\"b2content\":\"For every client\\/buyer and their personalized mood-boards, we draft and design different fabrics, silhouettes, print patterns and embroidery techniques according to their fashion taste. The styles having the element of needlework has always been our forte, the credit for which goes to our remarkable in-house embroidery designing team, hand-embroidery workers, and automated embroidery machines. We encompass three \\u201cDesign Showrooms\\u201d that tailor ethnic and western styles and an additional \\u201cDesign Studio\\u201d under the leadership of one of our Directors \\u2013 Mr. Avyay Dewan, that caters only to high-fashion modes and clients because why have one when you can sport four!\",\"b3heading\":\"Design\",\"b3title\":\"Automation In Designing\",\"b3image\":\"160344756933.jpg\",\"b3content\":\"Ma\\u2019am Arts design and product development team consists of over dedicated designers for specific tastes and garment classes. Our well updated and steadfast group researches, analyzes, and follows the hottest trends through market forecasting tools like WGSN and plan the entire range with ease. Recruited from renowned fashion colleges like National Institute of Fashion Technology (NIFT) and Pearl, our bunch of experts have made our design team our fiercest pride. Coached with design software\\u2019s like CAD, CorelDraw, Illustrator and Adobe Photoshop, our team conceives and constructs designs from the scratch that have a speck of our persona in them. We aim to weave dreams into reality.\",\"slider\":[{\"sliderimage\":\"160344756933.jpg\",\"slidertitle\":\"VISION\",\"sliderdescription\":\"To create a Zero-Defect environment with a surge for Continuous Improvement.\"},{\"sliderimage\":\"160344756933.jpg\",\"slidertitle\":\"MISSION\",\"sliderdescription\":\"On time delivery with the Best Product Quality to achieve Total Customer Satisfaction.\"}]}', '1', 'design', 2, '2020-10-23 06:06:15', '2020-10-23 11:14:01'),
(36, 'Manufacturing', '16034357911.jpg', '1', '<p style=\"text-align: justify; font-stretch: normal; line-height: normal;\"><font size=\"2\" face=\"arial\">Time and again, Ma’am Arts has refurbished itself with the latest manufacturing technology and processes. Adapting to the latest automated technology is the need of the hour today. A crucial aspect for the growth of any organization is the ability to efficiently adapt itself to the latest developments and integrate its machines with human resources, resulting in better complimentary output for everybody.&nbsp;</font></p>\r\n<p style=\"margin-top: 5px; margin-bottom: 5px; text-align: justify; font-stretch: normal; line-height: normal;\"><font size=\"2\" face=\"arial\">At Ma’am Arts, we have the holistic approach to “state of the art” apparel manufacturing. Through our quantum of 3 technologically advanced factories, each comprising of different automated and computerized machinery, we currently hold a capacity of producing 2.5 Lac garments per month. Our invaluable asset – a team of 1500 technically strong and committed professionals, work enthusiastically to reach the forever increasing demands of our customers.</font></p>\r\n<p style=\"text-align: justify; font-stretch: normal; line-height: normal;\"><font size=\"2\" face=\"arial\">Over the past few years, we have taken all of the above very sincerely and revamped our infrastructure by inculcating 1000 Sewing machines. Sewing machines are the building blocks for any garment manufacturing cum export house. Our sewing machines are in-built with Under Bed Trimmer (UBT), direct-drive motors, LED at needlepoint and all the other safety equipment necessary for the operator. The Enterprise Resource Planning (ERP) application is fully integrated as per the customized needs of the organization. All the employees are proficiently coached for their job profiles in their respective departments to achieve the best desired results.&nbsp;</font></p>\r\n<p style=\"text-align: justify; font-stretch: normal; line-height: normal; min-height: 15px;\"><font size=\"2\" face=\"arial\"><br></font></p>\r\n<p style=\"font-stretch: normal; line-height: normal; color: rgb(6, 6, 6);\"><b><font size=\"2\" face=\"arial\">CAPABILITIES</font></b></p>\r\n<p style=\"font-stretch: normal; line-height: normal; color: rgb(6, 6, 6);\"><font size=\"2\" face=\"arial\"><b>SPREADER</b></font></p>\r\n<p style=\"text-align: justify; font-stretch: normal; line-height: normal; color: rgb(6, 6, 6);\"><font size=\"2\" face=\"arial\">In 2019, we enhanced our cutting department with the addition of fully Automatic Fabric Spreading machines and managed to scale up the cutting capacity by 40%, which now stands at more than 10,000 units a day.&nbsp;</font></p>\r\n<p style=\"margin-bottom: 8px; text-align: justify; font-stretch: normal; line-height: normal; color: rgb(6, 6, 6);\"><font size=\"2\" face=\"arial\">By relentlessly modernizing, the infrastructure we are determined to enhance and amalgamate ourselves with the new technological advancements!</font></p>\r\n<p style=\"margin-bottom: 8px; text-align: justify; font-stretch: normal; line-height: normal; color: rgb(6, 6, 6); min-height: 14px;\"><font size=\"2\" face=\"arial\"><br></font></p>\r\n<p style=\"margin-bottom: 8px; text-align: justify; font-stretch: normal; line-height: normal; color: rgb(6, 6, 6);\"><font size=\"2\" face=\"arial\"><b>EMBROIDERY</b></font></p>\r\n<p style=\"margin-bottom: 8px; text-align: justify; font-stretch: normal; line-height: normal; color: rgb(6, 6, 6);\"><font size=\"2\" face=\"arial\">In 2014, we installed our own Computerized Automated Embroidery Machine set up, in-house. In Ma’am Arts, embroidery is an art of adorning a fabric with beautiful colored threads. To meet and maintain the quality of the embroidered product, we have installed a setup of 3 multi-head automatic and Computerized Embroidery Machines.</font></p>\r\n<p style=\"margin-bottom: 8px; text-align: justify; font-stretch: normal; line-height: normal; color: rgb(6, 6, 6);\"><font size=\"2\" face=\"arial\">The “needle-work machines” have a daily production capacity of around 1000 – 1200 garment units per day, depending upon the style/design. Automating the factory has been one of our best decisions to stay on top of the game in a world full of ever-changing technological needs.&nbsp;</font></p>\r\n<p style=\"margin-bottom: 8px; text-align: justify; font-stretch: normal; line-height: normal; color: rgb(6, 6, 6); min-height: 14px;\"><font size=\"2\" face=\"arial\"><br></font></p>\r\n<p style=\"margin-bottom: 8px; text-align: justify; font-stretch: normal; line-height: normal; color: rgb(6, 6, 6);\"><font size=\"2\" face=\"arial\"><b>CAD/CAM</b></font></p>\r\n<p style=\"text-align: justify; font-stretch: normal; line-height: normal; color: rgb(25, 28, 31);\"><font size=\"2\" face=\"arial\">In 2010, we installed the CAD/CAM software “Audaces” from Brazil, which is one of its kind and is known for the traceless automatic digitization of patterns. Once the models and fabrics for production are defined, the software automatically calculates the cut order.</font></p>\r\n<p style=\"text-align: justify; font-stretch: normal; line-height: normal; color: rgb(25, 28, 31);\"><font size=\"2\" face=\"arial\">This tool calculates the cut order through information such as table width, fabric type, maximum marker length, estimate yield, the maximum number of layers and number of colors to the cut. <span style=\"color: #060606\">Together with the CAD setup and the spreading machine, Ma’am Arts has not only reduced human hours but also pushed its cutting capacity by 40%.</span></font></p>\r\n<p style=\"margin-bottom: 8px; text-align: justify; font-stretch: normal; line-height: normal; color: rgb(25, 28, 31);\"><font size=\"2\" face=\"arial\">The complete setup coupled together with the skilled manpower provides precise plotting and guarantees high-quality standards into the final product.</font></p><p style=\"margin-bottom: 8px; text-align: justify; font-stretch: normal; line-height: normal; color: rgb(25, 28, 31);\"><font size=\"2\" face=\"arial\"><br></font></p>\r\n<p style=\"margin-bottom: 8px; text-align: justify; font-stretch: normal; line-height: normal; color: rgb(6, 6, 6);\"><font size=\"2\" face=\"arial\"><b>TESTING</b></font></p>\r\n<p style=\"margin-top: 5px; text-align: justify; font-stretch: normal; line-height: normal;\"><font size=\"2\" face=\"arial\">Ma’am Arts, internal laboratories conduct performance testing and color approvals at various stages on raw materials, fabrics, garments, and trims in accordance with international test standards.</font></p>\r\n<p style=\"margin-top: 5px; text-align: justify; font-stretch: normal; line-height: normal;\"><font size=\"2\" face=\"arial\">Our in-house testing lab is equipped with all the necessary machines with a team of textile engineers to ensure our products’ top-notch value. The lab conducts basic, yet important fabric and garment performance tests (FPT/GPT) required for being at par with our Quality Standards.</font></p>\r\n<p style=\"margin-top: 5px; text-align: justify; font-stretch: normal; line-height: normal;\"><font size=\"2\" face=\"arial\">Every design/garment requires a different fabric that flatters its silhouette and style. The fabric parameters like the count, construction, and GSM are identified using the Pick Glass, GSM Cutter, and the Digital GSM Scale. Our internal washing machine is used for assessing the amount of processing shrinkage; the fabric/garment/trim might go through. Few of our other in-house machines include - The Croc Meter, a scientific apparatus that checks the color fastness of dyed fabric and garment. Equipment’s like Tear Resistance Tester and Button Snap Pull Tester are a valuable addition.</font></p>\r\n<p style=\"text-align: justify; font-stretch: normal; line-height: normal;\"><font size=\"2\" face=\"arial\">We believe that collaborating with the latest gadgets and embracing the advanced technology has not only helped in setting us on the front foot but also created a constant environment of learning. By relentlessly modernizing the infrastructure and upgrading the human resources, we are determined to put our name on the global map!</font></p>', 'Ma\'am Arts- A Government Recognised Star Export House', 'Ma\'am Arts- A Government Recognised Star Export House', '1', NULL, '1', 'manufacturing', 1, '2020-10-23 06:49:52', '2020-10-23 10:19:18'),
(37, 'Sustainability', NULL, '0', NULL, 'Ma\'am Arts- A Government Recognised Star Export House', 'Ma\'am Arts- A Government Recognised Star Export House', '1', '{\"b1image\":\"160345099031.jpg\",\"b1content\":\"Businesses are many, successful are those who are consistent! Every organization, serving any sector, should be law abiding, employee oriented and ethically strong. Ma\\u2019am Arts, being one such unit, has cultivated a habit of setting a precedent in everything it does. Ours is a success story. For almost 3 decades, we have sustained in the business and how. The transparent environment makes us a trust-worthy unit for our employees. We attract and appreciate talent, foster our employees\\u2019 communication and independent decision-making skills. We have created many job opportunities for the fairer and stronger sex thereby empowering women in our little way.\",\"b2heading\":\"Sustainability\",\"b2title\":\"Ethical Conduct\",\"b2image\":\"160345004732.jpg\",\"b2content\":\"Our ethical and professional conduct has made us one of the first factories in Jaipur, Rajasthan to be screened and certified by the US customs in 2012 for C-TPAT. Led by U.S. Customs and Border Protection, C-TPAT focuses on improving the security of private companies\' supply chains with respect to terrorism. Another feather in our hat is our SA 8000 certification which is an international certification standard that encourages organizations to develop, maintain and apply socially acceptable practices in the workplace. Being one of the pioneers in Jaipur to obtain WRAP certification in 2011 shows our commitment towards our duty ethically. WRAP is the world\\u2019s largest independent factory-based social compliance certification program for the sewn products sector. We are also a decade old recipient of SEDEX certification whose auditing methodology comprises of 4 pillars that we together stand for \\u2013 Labor, Health & Safety, Environment and Business Ethics.\",\"b3heading\":\"Sustainability\",\"b3title\":\"Enviornment Safety\",\"b3image\":\"160345316133.jpg\",\"b3content\":\"Knowing that health and safety are crucial in protecting the well-being of our employees and the organization, we cultivate a nimble and collaborative environment. We are determined to nurture our employees, grow, and sustain with them in the most healthy, happy, and progressive way.\",\"slider\":[{\"sliderimage\":\"16043839291.jpg\",\"slidertitle\":\"VISION\",\"sliderdescription\":\"To create a Zero-Defect environment with a surge for Continuous Improvement.\"},{\"sliderimage\":\"16043839302.JPG\",\"slidertitle\":\"MISSION\",\"sliderdescription\":\"On time delivery with the Best Product Quality to achieve Total Customer Satisfaction.\"}]}', '1', 'sustainability', 4, '2020-10-23 09:46:38', '2020-11-03 06:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `complaincecontent`
--

CREATE TABLE `complaincecontent` (
  `c_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaincecontent`
--

INSERT INTO `complaincecontent` (`c_id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(23, 'C-TPAT', 'One of the first factories in Jaipur to have been screened by the U.S. Customs and granted C-TPAT certificate which focuses on improving the private companies’ supply chains security with respect to terrorism.', '1598955856.jpg', '0', '2020-09-01 10:24:16', '2020-09-01 10:24:16'),
(24, 'SEDEX', 'We are a decade old recipient of SEDEX, a non-profit organization whose auditing and certification methodology comprises of 4 pillars that we together stand for - Labor, Health & Safety, Environment and Business Ethics.', '1598955885.jpg', '0', '2020-09-01 10:24:45', '2020-09-01 10:24:45'),
(25, 'WRAP', 'Being one of the leaders to obtain the WRAP certification in 2011 shows our commitment towards our duty. It’s the world’s largest independent factory-based social compliance certification program for the sewn products sector.', '1598955989.jpg', '0', '2020-09-01 10:26:29', '2020-09-01 10:26:29'),
(26, 'SA- 8000', 'In 2014, our unit was first audited and certified SA 8000 – an international standard that encourages organizations to develop, maintain and apply socially acceptable practices in the workplace.', '1598956012.jpg', '0', '2020-09-01 10:26:52', '2020-09-01 10:26:52'),
(27, 'STAR Export house', 'MA’AM Arts holds the privilege of being amongst the first Export Houses in Jaipur to be awarded the STAR Export house status by the Government of India.', '1598956030.jpg', '1', '2020-09-01 10:27:10', '2020-09-01 10:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `complaincepara`
--

CREATE TABLE `complaincepara` (
  `c_id` int(11) NOT NULL,
  `complaince_para` longtext NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaincepara`
--

INSERT INTO `complaincepara` (`c_id`, `complaince_para`, `status`, `created_at`, `updated_at`) VALUES
(2, 'We know that comfort, health, and safety are crucial in protecting the well-being of our employees and the company. Every organization, serving any sector, should be law abiding and ethically strong. Ma’am Arts, being one such unit, has cultivated a habit of setting a precedent in everything it does – including our compliance policies!', '1', '2020-08-28 08:58:29', '2020-08-28 08:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_id` int(11) NOT NULL,
  `description` longtext,
  `address` longtext NOT NULL,
  `phone` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `email1` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `google` longtext NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `facebook` longtext,
  `instagram` longtext,
  `twitter` longtext,
  `youtube` longtext,
  `linkedin` longtext,
  `gplus` longtext,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `description`, `address`, `phone`, `phone2`, `email1`, `email2`, `google`, `status`, `facebook`, `instagram`, `twitter`, `youtube`, `linkedin`, `gplus`, `created_at`, `updated_at`) VALUES
(2, NULL, 'G1-51, Sitapura Industrial Area, Jaipur, Rajasthan (India).', '+91-9829052052', '+91-8094452052', 'boss@maamarts.com', 'avyaydewan@maamarts.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.796228214378!2d75.83092911499503!3d26.782764683183807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396dc90a8b486fe5%3A0xa87c7eb6879f6e5b!2sMA\'AM%20Arts!5e0!3m2!1sen!2sin!4v1601642484722!5m2!1sen!2sin\" width=\"100%\" height=\"220\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', '0', 'https://www.facebook.com/maamartsofficial', 'https://www.instagram.com/maamarts/', 'https://twitter.com/maam_arts', 'https://www.youtube.com/channel/UCi8939Rdpffm2q4MhFPuqww?view_as=subscriber', 'https://www.linkedin.com/company/ma\'am-arts/', 'https://maamartsofficial.business.site', '2020-08-26 08:31:07', '2020-08-26 08:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('1','0') NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` longtext,
  `message` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `type`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(50, 'Lexi Johnson', '0', 'shopdosfemmes@gmail.com', '9154973467', NULL, 'I am looking for unique, ready made designs to carry in my store Dos Femmes.', '2020-12-18 15:35:57', '2020-12-18 15:35:57'),
(61, 'Andrea', '1', 'agm.agmgraphics@yahoo.com', '5486932165', 'Inquiry', 'Hi ,\r\n \r\nWe have an inquiry from our client for some of your products.\r\nI would like to know the availability and price as per our order requirements and technical specifications \r\nwhich will be sent for your review and quoting reference.\r\n\r\n\r\nKindly inform your export manager to get back to me soon.\r\n\r\n\r\n\r\n\r\n\r\nThanks and Best Regards\r\n\r\n\r\n\r\n \r\n\r\nAndrea Castello\r\n\r\n\r\n\r\n\r\nAGM Anwar Grafimec Commercio S.R.O.\r\nCorso Dante Alighieri, 56/B Grumo Nevano (NA) Italy', '2021-01-26 03:15:52', '2021-01-26 03:15:52'),
(174, 'nancy sharma', '0', 'mnancysharma04@gmail.com', '6367070844', NULL, 'i want to do tranning', '2021-09-27 15:10:40', '2021-09-27 15:10:40'),
(175, 'Harsh', '1', 'dhawanharsh14@gmail.com', '7088704690', 'Seeking for Job', 'Dear Sir/Mam,\r\n\r\n \r\n\r\nI am Harsh Dhawan student of fashion design. I am aiming to have an job in your Organization . I admire your Organization and connect to its philosophy and idea of work. It would be a great opportunity for me to learn under your guidance and mentoring. This would be an honor to learn under the shadow of your Oranisation. Kindly go through my Resume and confirm. Click on my profile link below\r\n\r\n \r\n\r\nhttps://www.behance.net/gallery/125626549/Graphic-Design-2021\r\n\r\n \r\n\r\nThanking you\r\n\r\nSincerely', '2021-10-13 13:28:04', '2021-10-13 13:28:04'),
(176, 'Nandini chaudhary', '0', 'nandini.chaudhary@nift.ac.in', '08076530590', NULL, 'internship', '2021-10-26 06:04:02', '2021-10-26 06:04:02'),
(177, 'P Lokchand', '0', 'Lokchandmpl@gmail.com', '88867 60286', NULL, 'Hi I saw the products and I want to purchase wholesale. What will be the price.', '2021-11-11 10:32:34', '2021-11-11 10:32:34'),
(178, 'Durgesh kumawat', '1', 'dskumawat546@gmail.com', '07742471505', 'Search Job in IT Engineer', 'Sir\r\n\r\ni have search job in IT Engineer.', '2021-11-20 09:20:57', '2021-11-20 09:20:57'),
(179, 'shivani', '0', 'shivaniss85123@gmail.com', '7357703540', NULL, 'I have a store...want to keep product s', '2021-11-23 17:17:30', '2021-11-23 17:17:30'),
(180, 'Apaar Sadh', '1', 'a.sadhh02@gmail.com', '7016200375', 'Fabric Supplier', 'Dear Sir,\r\nWe are pleased to introduce ourselves as one of the\r\nleading Manufacturer and supplier of all kinds of\r\npolyester fabric made in Surat like Poly-Silk > Viscose Chiffon \r\n> Polyester > Poly Georgette > Satan > Mineral Chiffon > marble \r\nchiffon> chiffon > Japan Satan > poly chiffon > poly-silk.\r\nand other fabrics.\r\nWe have a very good collection of designs and new\r\nqualities of Dyed/printed in the above items with a very\r\nnice combination for summer and winter. We also keep stock of various\r\npolyester-based fabrics with a varied collection of designs.\r\nWe would like to do regular business with your reputed company.\r\nPlease let us know your requirements for items, so we\r\ncan send you our samples/swatches at our very\r\ncompetitive prices. Please give us a chance to show\r\nyou our merchandise.', '2021-11-25 07:39:51', '2021-11-25 07:39:51'),
(181, 'Goldy kumari', '1', 'kumarigoldy81@gmail.com', '8873018374', 'Fashion designer', 'Job', '2021-11-28 03:19:34', '2021-11-28 03:19:34'),
(65, 'Geetika', '0', 'geetika_nischal2000@yahoo.com', '9872761606', NULL, 'Hi, I would request for your product catalogue for Summer Jackets and beach wear and minimum piece order. Kindly mail the information at the above email address. Thank you', '2021-02-16 00:55:56', '2021-02-16 00:55:56'),
(161, 'Antonio Toledo', '0', 'bminascommerce@gmail.com', '5581994581638', NULL, 'send catalogs of the latest international clothing releases, especially the used clothing fashions in america.', '2021-07-28 17:14:44', '2021-07-28 17:14:44'),
(164, 'Brigitte Van Rooyen', '1', 'info@swallow.co.za', '0834176795', 'Catalog', 'Please send your boutique clothing collection / catalog', '2021-08-08 12:30:01', '2021-08-08 12:30:01'),
(168, 'Ana Maria Carrasco', '0', 'anamacarrasco2@hotmail.com', '573124314111', NULL, 'I want to see your catalog. Thanks a lot', '2021-09-10 01:33:54', '2021-09-10 01:33:54');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `home_id` int(11) NOT NULL,
  `home_video` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`home_id`, `home_video`, `status`, `created_at`, `updated_at`) VALUES
(4, 'home.mp4', '0', '2020-09-08 07:40:17', '2020-09-08 07:40:17'),
(6, 'Compressed 2.0 - 23.09.2020.mp4', '0', '2020-09-24 13:04:45', '2020-09-24 13:04:45'),
(8, 'Ma\'am Arts Camp-VC2.mp4', '1', '2020-09-28 05:36:03', '2020-09-28 05:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `infraphoto`
--

CREATE TABLE `infraphoto` (
  `p_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infraphoto`
--

INSERT INTO `infraphoto` (`p_id`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(2, '1598509018.jpg', '0', '2020-08-27 06:17:00', '2020-08-27 06:17:00'),
(3, '1598511011.jpg', '1', '2020-08-27 06:50:13', '2020-08-27 06:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `infravideo`
--

CREATE TABLE `infravideo` (
  `v_id` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `para` longtext NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infravideo`
--

INSERT INTO `infravideo` (`v_id`, `video`, `para`, `status`, `created_at`, `updated_at`) VALUES
(2, 'https://www.youtube.com/watch?v=faTYYILtBTM', 'Ma’am Arts was inaugurated in 1988 with just 10 sewing machines. Over the period of time, we grew leaps and bounds and currently own a setup of 3 “state of the art” factories and qualified labor with over 800 sewing machines catering to the buyer all over the globe.', '1', '2020-08-28 08:57:52', '2020-08-28 08:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `position` enum('1','0') NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `position`, `title`, `link`, `status`, `created_at`, `updated_at`) VALUES
(14, '0', 'IndiaMART Leaders of Tomorrow 2011', 'https://www.youtube.com/watch?v=kjHH-DBCRZE', '1', '2020-09-18 09:17:02', '2020-09-18 09:17:02'),
(13, '0', 'MA\'AM Arts, Jaipur at 63rd IIGF', 'https://www.youtube.com/watch?v=uOcbLXL4ErM', '0', '2020-09-18 09:16:21', '2020-09-18 09:16:21'),
(12, '0', 'MA\'AM Arts, Jaipur at Vastra 2012', 'https://www.youtube.com/watch?v=tFu2nIdCtMk', '0', '2020-09-18 09:15:47', '2020-09-18 09:15:47'),
(11, '0', 'MA\'AM Arts against Child Labor, GoodWeave India', 'https://www.youtube.com/watch?v=UK5ZVCMZBfU', '0', '2020-09-18 09:09:04', '2020-09-18 09:09:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ourbusiness`
--

CREATE TABLE `ourbusiness` (
  `ob_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `position` enum('0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16') NOT NULL,
  `image_heading` varchar(255) NOT NULL,
  `image_para` longtext NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ourbusiness`
--

INSERT INTO `ourbusiness` (`ob_id`, `image`, `position`, `image_heading`, `image_para`, `status`, `created_at`, `updated_at`) VALUES
(9, '1601729705t.jpg', '1', 'DESIGN', 'Our dedicated and steadfast group - researches, analyzes, and follows the hottest Global trends through the forecasting tools like WGSN etc. and plans the entire range with ease.', '0', '2020-08-24 16:33:02', '2020-08-24 16:33:02'),
(10, '1601729547t.jpg', '2', 'QUALITY', 'Quality for us is a habit that we have cultivated into a basic routine, and we leave nothing to chance. We believe in doing it right, even when no one is checking.', '0', '2020-08-24 16:40:00', '2020-08-24 16:40:00'),
(11, '1601729799t.jpg', '4', 'SUSTAINABILITY', 'In this era of rapid need of growth, Ma’am Arts never supports the exploitation of the biosphere and always believes that coexistence is primal in nature.', '0', '2020-08-24 17:55:54', '2020-08-24 17:55:54'),
(12, '1601729816t.jpg', '3', 'MANUFACTURING', 'Collaborating with the latest gadgets and embracing the advanced technology has not only helped in setting us on the front foot, but also created a constant environment of learning', '1', '2020-08-24 17:59:48', '2020-08-24 17:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `ourbusinesspara`
--

CREATE TABLE `ourbusinesspara` (
  `id` int(11) NOT NULL,
  `para` longtext NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ourbusinesspara`
--

INSERT INTO `ourbusinesspara` (`id`, `para`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Keeping in mind the beauty and fierceness that every woman possesses, we started our women’s apparel business more than a quarter century back. Since then, there has been no looking back for us. Our current global presence has expanded including Australia, France, Europe, and Japan to name a few.', '1', '2020-08-28 08:42:23', '2020-08-28 08:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photogallery`
--

CREATE TABLE `photogallery` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photogallery`
--

INSERT INTO `photogallery` (`id`, `photo`, `caption`, `created_at`, `updated_at`) VALUES
(31, '1603453645.jpg', 'Stitching Department', '2020-10-23 11:47:25', '2020-10-23 11:47:25'),
(30, '1603453539.jpg', 'Quality Check', '2020-10-23 11:45:40', '2020-10-23 11:45:40'),
(29, '1603453495.jpg', 'Testing Department', '2020-10-23 11:44:55', '2020-10-23 11:44:55'),
(32, '1603453708.jpg', 'Sampling Department', '2020-10-23 11:48:30', '2020-10-23 11:48:30'),
(33, '1603453759.jpg', 'Sample In Making', '2020-10-23 11:49:20', '2020-10-23 11:49:20'),
(34, '1603453828.jpg', 'Embroidery Automation', '2020-10-23 11:50:29', '2020-10-23 11:50:29'),
(35, '1603453865.jpg', 'CAD Department', '2020-10-23 11:51:06', '2020-10-23 11:51:06'),
(36, '1603454199.jpg', 'Empowering Women', '2020-10-23 11:56:39', '2020-10-23 11:56:39'),
(37, '1603454336.jpg', 'Magic of Hands', '2020-10-23 11:58:57', '2020-10-23 11:58:57'),
(38, '1603454454.jpg', 'Quality is checked at every stage to deliver the best', '2020-10-23 12:00:55', '2020-10-23 12:00:55'),
(39, '1603691818.jpg', 'Pattern Making', '2020-10-26 05:57:00', '2020-10-26 05:57:00'),
(40, '1603691926.jpg', 'Best quality delivered', '2020-10-26 05:58:46', '2020-10-26 05:58:46');

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `id` int(11) NOT NULL,
  `description` longtext,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `category_image2` varchar(255) NOT NULL,
  `category_image3` varchar(255) NOT NULL,
  `template` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`id`, `description`, `category_name`, `category_image`, `category_image2`, `category_image3`, `template`, `slug`, `created_at`, `updated_at`) VALUES
(24, 'Play With Yarn', 'Embroideries', '1600416665.jpg', '1600418868.jpg', '1600418740.jpg', 't2', 'embroideries', '2020-09-18 08:11:05', '2020-09-18 08:11:05'),
(26, 'Print Culture', 'Prints', '1600429250.jpg', '16004292502.jpg', '16004292503.jpg', 't2', 'prints', '2020-09-18 11:40:50', '2020-09-18 11:40:50'),
(27, 'Denim Street', 'Denims', '1600429387.jpg', '16004293872.jpg', '16004293883.jpg', 't3', 'denims', '2020-09-18 11:43:08', '2020-09-18 11:43:08'),
(28, 'The Red Carpet...', 'Boutique Collection', '1600430356.jpg', '16004303572.jpg', '16004303573.jpg', 't2', 'boutique-collection', '2020-09-18 11:59:17', '2020-09-18 11:59:17'),
(29, 'Warm & Wonderful', 'Jackets', '1601644491.jpg', '16004306432.jpg', '16004306433.jpg', 't3', 'jackets', '2020-09-18 12:04:03', '2020-09-18 12:04:03'),
(30, 'Feel The Sand', 'Beach Wear', '1600430809.jpg', '16004308102.jpg', '16004308103.jpg', 't3', 'beach-wear', '2020-09-18 12:06:50', '2020-09-18 12:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `productimages`
--

CREATE TABLE `productimages` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productimages`
--

INSERT INTO `productimages` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(16, '14', '16006362954.jpg', '2020-09-20 21:11:35', '2020-09-20 21:11:35'),
(15, '14', '16006362943.jpg', '2020-09-20 21:11:35', '2020-09-20 21:11:35'),
(14, '14', '16006362942.jpg', '2020-09-20 21:11:34', '2020-09-20 21:11:34'),
(13, '14', '16006362931.jpg', '2020-09-20 21:11:34', '2020-09-20 21:11:34');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_description` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `template` varchar(255) DEFAULT NULL,
  `templatedata` longtext,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_description`, `category_id`, `template`, `templatedata`, `slug`, `created_at`, `updated_at`) VALUES
(23, 'High Street', 'Find the Starlet in You!', '28', 't2', '{\"t2b2heading\":\"shimmer, shine & everything nice...\",\"t2b2description\":null,\"t2b3heading\":\"Classic Vogue\",\"t2b3description\":\"Because - Classics never fade!\",\"t2b1baseimage1\":\"16008446801.jpg\",\"t2b1baseimage2\":\"16008446802.jpg\",\"t2b1baseimage3\":\"16008446803.jpg\",\"t2b2image1\":\"16008446804.jpg\",\"t2b3image1\":\"16008446806.jpg\",\"t2b3image2\":\"16008446807.jpg\",\"t2b3image3\":\"16008446808.jpg\"}', 'high-street', '2020-09-23 07:04:40', '2020-09-28 09:33:38'),
(22, NULL, 'Print Culture', '26', 't2', '{\"t2b2heading\":\"Gorgeous Indulgence\",\"t2b2description\":\"The vivid hues and tones in florals and geometrical patterns are sure to take your breath away!\",\"t2b3heading\":\"Prints\",\"t2b3description\":null,\"t2b1baseimage1\":\"16008431671.jpg\",\"t2b1baseimage2\":\"16008431672.jpg\",\"t2b1baseimage3\":\"16017155203.jpg\",\"t2b2image1\":\"16008431674.jpg\",\"t2b3image1\":\"16008431676.jpg\",\"t2b3image2\":\"16008431677.jpg\",\"t2b3image3\":\"16008431678.jpg\"}', '', '2020-09-23 06:39:28', '2020-10-03 08:58:40'),
(21, 'D e n ! m s', 'that make you, YOU!', '27', 't1', '{\"t1b2heading\":\"Washed & Rugged\",\"t1b2description\":null,\"t1b3heading\":\"denims never go out of style...\",\"t1b3description\":null,\"t1b1baseimage\":\"16013780361.jpg\",\"t1b2image1\":\"16013813532.jpg\",\"t1b2image2\":\"16013813533.jpg\",\"t1b2image3\":\"16013813534.jpg\",\"t1b3image1\":\"16013813545.jpg\",\"t1b3image2\":\"16013813546.jpg\",\"t1b3image3\":\"16013780367.jpg\"}', 'd-e-n-!-m-s', '2020-09-23 06:23:23', '2020-09-29 12:09:14'),
(25, 'Beaches', 'Feel The Sand', '30', 't3', '{\"t3b1baseimage1\":\"16008453451.jpg\",\"t3b1baseimage2\":\"16008453452.jpg\",\"t3b2heading\":\"Tanned afternoons\",\"t3b2description\":\"Be comfortable in your own skin!\",\"t3b2image1\":\"16008453453.jpg\",\"t3b2image2\":\"16008453454.jpg\",\"t3b2image3\":\"16008453455.jpg\"}', 'beaches', '2020-09-23 07:15:45', '2020-09-28 08:31:23'),
(28, 'Jackets', 'Let Your Winters Be Stylish', '29', 't3', '{\"t3b1baseimage1\":\"16008498961.jpg\",\"t3b1baseimage2\":\"16008498962.jpg\",\"t3b2heading\":\"Some Sizzling Styles\",\"t3b2description\":null,\"t3b2image1\":\"16008498963.jpg\",\"t3b2image2\":\"16016445824.jpg\",\"t3b2image3\":\"16008498965.jpg\"}', 'jackets', '2020-09-23 08:31:37', '2020-10-02 13:16:22'),
(29, 'Embroideries', 'Vibrant & Be-You.tiful!', '24', 't1', '{\"t1b2heading\":\"...summer 2021!\",\"t1b2description\":null,\"t1b3heading\":\"subtle & playful...\",\"t1b3description\":null,\"t1b1baseimage\":\"16013772831.jpg\",\"t1b2image1\":\"16013772842.jpg\",\"t1b2image2\":\"16013772843.jpg\",\"t1b2image3\":\"16018737344.jpg\",\"t1b3image1\":\"16018737345.jpg\",\"t1b3image2\":\"16018737346.jpg\",\"t1b3image3\":\"16013772847.jpg\"}', 'embroideries', '2020-09-29 11:01:24', '2020-10-05 04:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `rateId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recognitionpara`
--

CREATE TABLE `recognitionpara` (
  `re_id` int(11) NOT NULL,
  `para` longtext NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recognitionpara`
--

INSERT INTO `recognitionpara` (`re_id`, `para`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Who can appreciate your diligent hard work better than your own clientele! Being a pioneer export house, Ma’am Arts has been a recipient of numerous felicitations and awards from its clientele time and again for its on-time delivery schedule without any compromise on the quality front.', '1', '2020-08-28 08:54:36', '2020-08-28 08:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `recognitions`
--

CREATE TABLE `recognitions` (
  `re_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recognitions`
--

INSERT INTO `recognitions` (`re_id`, `title`, `description`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(8, 'BEST FAST FASHION VENDOR', 'We were honored with “BEST FAST FASHION VENDOR” award by the Landmark Group for manufacturing and shipping style(s) with outstanding quality, from ground zero, within a span of 15-20 days!', '1599304003.jpg', '0', '2020-08-28 11:28:14', '2020-08-28 11:28:14'),
(9, 'BEST VENDOR PERFORMANCE', 'We pat our own back to have been awarded for our diligent hard work - “BEST VENDOR PERFORMANCE” by the House of Anita Dongre for the AW season in 2019.', '1598614175.jpg', '0', '2020-08-28 11:29:35', '2020-08-28 11:29:35'),
(10, 'BEST CONTEMPORARY PRESENTATION', 'Since we are known for our contemporary style and fashion; we were felicitated with the 2nd “BEST CONTEMPORARY PRESENTATION” award at the VASTRA - third International Textile and Apparel Fair.', '1598614212.jpg', '0', '2020-08-28 11:30:12', '2020-08-28 11:30:12'),
(11, 'FASTEST GROWING INDUSTRIALIST', 'Our transformation from 20 machines to 3 automated “state of the art” units bagged us with the title “FASTEST GROWING INDUSTRIALIST” by Jaipur Priyadarshani JCI more than a decade ago.', '1599292832.jpg', '0', '2020-08-28 11:32:06', '2020-08-28 11:32:06'),
(12, 'VALUABLE CONTRIBUTION AND PARTNERSHIP', 'It is “Ma’am Arts’s” sheer hard work and diligent actions that made us worthy for this award. We are proud to have a strong partnership with the Landmark Group’s MAX!', '1598614404.jpg', '0', '2020-08-28 11:33:24', '2020-08-28 11:33:24'),
(13, 'BEST VENDOR PERFORMANCE', 'It is always a good time when you receive the “THE BEST VENDOR PERFORMANCE AW19” certificate and award from the House of Anita Dongre for your absolute will and performance.', '1598614452.jpg', '1', '2020-08-28 11:34:12', '2020-08-28 11:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `testimonial` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `photo`, `testimonial`, `created_at`, `updated_at`) VALUES
(2, 'Birgit Lang, Creative Buyer at DW-Shop (Germany)', '1599898349.jpg', 'All the Ma\'am Arts team members are very professional. From the very first moment, when we started to work together, I could count on the full support and knowledge of the complete company. For each situation and challenge, the right persons were sitting together at one table, so that everything could be treated and solved in the most efficient way. And besides all the business, the whole team and management made me feel as being part of the Ma\'am Arts family.', '2020-09-12 08:12:30', '2020-09-26 09:21:38'),
(3, 'Emma Goody, CEO, Boem Woman (Australia)', '1599901827.jpeg', 'Ma’am Arts has been such a dream to work with. The team members are professional, reliable and also very talented. As a designer, it is imperative to work with a factory that understands bespoke design. The team at Ma’am Arts, has really gone above and beyond in this arena and have attempted to really get behind my design ethos and understand the brands entire direction. This has made working with Ma’am Arts not only rewarding but also fun on a creative level. \r\nThe quality of their goods is amazing and the facility is exceptional.\r\nOn a personal note- Ma’am Arts have offered me a team of very kind, caring and honest people. I adore each and every one of them and am very grateful to have such a wonderful factory get behind my brand and my design ideas. \r\nI very highly recommend ma’am Arts. You will be in the best hands with this family owned and run business and team.', '2020-09-12 09:10:27', '2020-09-14 09:18:09'),
(4, 'Kamal Govekar (Magnezindia)', '1599902615.jpg', 'I started to work with Ma’am Arts in 2010. Meeting Ma’am Arts in their own surroundings and seeing their production and factory facilities gave me a good feeling that we have here a company which has more personality behind than others. For me that is important as business have ups and downs and we need to be strong together. Ma’am Arts is a great partner in design and product development. They have helped us achieve our vision in European and Australian Market to deliver a quality product in time.', '2020-09-12 09:12:14', '2020-09-28 08:36:15'),
(5, 'Deepak Ahuja, Head – Sourcing & QA, Max Fashions India (Landmark Group)', '1600168894.jpg', 'Ma’am Arts team is very professional and collaborative. They are resourceful, reliable and keep to Customer Promise. Over the years, they have adapted to changing and new customer needs.', '2020-09-15 11:21:34', '2020-09-15 11:21:34'),
(6, 'Sangita Rohira, President- Sourcing and Production (House of Anita Dongre).', '1600411178.jpeg', 'Ma’ am Arts has a very professional and reliable team, who attends to every detail.  \r\nQuality product, competitive rates and a quick turnaround is something that they have always maintained. They also have a great infrastructure with all the facilities available for a quick sampling turnaround. \r\nAs a recognition, they also received the best vendor award from our organization last year (2019).', '2020-09-18 06:39:39', '2020-09-18 09:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `type`, `email`, `mobile`, `address`, `permissions`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maam Arts', '1', 'info@maamarts.com', '8299639330', 'Maam Arts', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20', NULL, '$2y$10$GT8fJgkYF59P3n07on6.zO8gzJXi8Ivx/6wBo29k2ZoGGAG085vbW', NULL, '2020-08-13 09:14:39', '2020-08-13 09:14:39'),
(4, 'Ankur Srivastava', '0', 'ankurssri87@gmail.com', '+918299639330', 'E-279 Mailkmau Colony', '1,5', NULL, '$2y$10$3mLgwuO7olGV9SQdBeV6QuBC8huTL39UrQMyCn1glIZ7Gqm6YxRtm', NULL, '2020-10-25 04:12:56', '2020-10-25 04:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `videogallery`
--

CREATE TABLE `videogallery` (
  `id` int(11) NOT NULL,
  `video` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videogallery`
--

INSERT INTO `videogallery` (`id`, `video`, `caption`, `created_at`, `updated_at`) VALUES
(9, 'https://www.youtube.com/watch?v=_8EvFfqpLqo', '', '2020-10-05 11:34:21', '2020-10-14 09:59:02'),
(13, 'https://www.youtube.com/watch?v=gSiOz9YkQTg', '', '2020-10-08 13:17:02', '2020-10-14 09:59:13'),
(4, 'https://www.youtube.com/watch?v=YWeE3OAhCLM', '', '2020-10-05 11:30:30', '2020-10-05 11:30:30'),
(5, 'https://www.youtube.com/watch?v=c6ln2Q8jzhY', '', '2020-10-05 11:31:26', '2020-10-05 11:31:26'),
(6, 'https://www.youtube.com/watch?v=czvy1ydlaNU', '', '2020-10-05 11:31:56', '2020-10-05 11:31:56'),
(7, 'https://www.youtube.com/watch?v=KNKmmV6W5q4', '', '2020-10-05 11:32:36', '2020-10-05 11:32:36'),
(10, 'https://www.youtube.com/watch?v=B5zssEb1X1A', '', '2020-10-05 11:54:10', '2020-10-05 11:54:10'),
(12, 'https://www.youtube.com/watch?v=UGbVoMh_BuQ', '', '2020-10-05 17:44:05', '2020-10-05 17:44:05'),
(14, 'https://www.youtube.com/watch?v=_8EvFfqpLqo', '', '2020-10-14 08:14:45', '2020-10-14 08:14:45'),
(15, 'https://www.youtube.com/watch?v=9QhHpyCFGRI', 'The Story of Our Leader- Mr. Rajiv Dewan (Covered by SOWTEX)', '2021-08-27 13:12:57', '2021-08-27 13:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `weteam`
--

CREATE TABLE `weteam` (
  `wt_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `description` longtext,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weteam`
--

INSERT INTO `weteam` (`wt_id`, `name`, `photo`, `designation`, `qualification`, `description`, `status`, `created_at`, `updated_at`) VALUES
(27, 'Mr. Rajiv Dewan', '1600411662.jpg', 'Director', NULL, 'Our director Mr. Rajiv Dewan started this special journey of hard work and success back in 1988. It was his vision and ambition that we are now one of the leading women’s apparel manufacturers.', '0', '2020-09-14 14:07:21', '2020-09-14 14:07:21'),
(28, 'Mr. Rakesh Dewan', '1600411689.jpg', 'Director', NULL, 'In 1991, Mr. Rakesh Dewan saw potential in the vision of Ma’am Arts and it is his professionalism, humility and honesty towards his duties that make him \"a man of his words\".', '0', '2020-09-14 14:09:07', '2020-09-14 14:09:07'),
(30, 'Mr. Jigar Dewan', '1600411714.jpg', 'Director', NULL, 'Mr. Jigar Dewan introduced the concept of new and innovative manufacturing technologies/ practices and their subsequent importance, with his joining in 2010. With his line of thoughts, setting a precedent has never been this easy.', '0', '2020-09-14 14:10:57', '2020-09-14 14:10:57'),
(31, 'Mr. Avyay Dewan', '1600411745.jpg', 'Director', NULL, 'With the joining of Mr. Avyay Dewan in2018, the designing and originality quotient has been solidified. His inputs on the international designs and a flair for creativity, have made Ma’am Arts synonymous to innovation.', '1', '2020-09-14 14:12:56', '2020-09-14 14:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `wethepeople`
--

CREATE TABLE `wethepeople` (
  `w_id` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wethepeople`
--

INSERT INTO `wethepeople` (`w_id`, `banner`, `description`, `status`, `created_at`, `updated_at`) VALUES
(6, '1599550714.jpg', 'It’s never a dull day at Ma’am Arts. We are an amalgamation of youthful exuberance and patience that comes from experience! The vibe and the people here appreciate each other’s talent and their independent decision-making skills. Transparency, communication, and innovation are some of the key principles we together believe in!', '1', '2020-08-28 11:23:09', '2020-08-28 11:23:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorymaster`
--
ALTER TABLE `categorymaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientslogo`
--
ALTER TABLE `clientslogo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaincecontent`
--
ALTER TABLE `complaincecontent`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `complaincepara`
--
ALTER TABLE `complaincepara`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `infraphoto`
--
ALTER TABLE `infraphoto`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `infravideo`
--
ALTER TABLE `infravideo`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourbusiness`
--
ALTER TABLE `ourbusiness`
  ADD PRIMARY KEY (`ob_id`);

--
-- Indexes for table `ourbusinesspara`
--
ALTER TABLE `ourbusinesspara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photogallery`
--
ALTER TABLE `photogallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productimages`
--
ALTER TABLE `productimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`rateId`);

--
-- Indexes for table `recognitionpara`
--
ALTER TABLE `recognitionpara`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `recognitions`
--
ALTER TABLE `recognitions`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videogallery`
--
ALTER TABLE `videogallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weteam`
--
ALTER TABLE `weteam`
  ADD PRIMARY KEY (`wt_id`);

--
-- Indexes for table `wethepeople`
--
ALTER TABLE `wethepeople`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categorymaster`
--
ALTER TABLE `categorymaster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clientslogo`
--
ALTER TABLE `clientslogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `complaincecontent`
--
ALTER TABLE `complaincecontent`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `complaincepara`
--
ALTER TABLE `complaincepara`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `infraphoto`
--
ALTER TABLE `infraphoto`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `infravideo`
--
ALTER TABLE `infravideo`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ourbusiness`
--
ALTER TABLE `ourbusiness`
  MODIFY `ob_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ourbusinesspara`
--
ALTER TABLE `ourbusinesspara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photogallery`
--
ALTER TABLE `photogallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `productimages`
--
ALTER TABLE `productimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `rateId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recognitionpara`
--
ALTER TABLE `recognitionpara`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recognitions`
--
ALTER TABLE `recognitions`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `videogallery`
--
ALTER TABLE `videogallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `weteam`
--
ALTER TABLE `weteam`
  MODIFY `wt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `wethepeople`
--
ALTER TABLE `wethepeople`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
