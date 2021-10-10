-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 11, 2021 at 02:24 AM
-- Server version: 10.3.27-MariaDB-0+deb10u1
-- PHP Version: 7.3.27-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facebook_tb`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_best_images`
--

CREATE TABLE `log_best_images` (
  `ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_url` text NOT NULL,
  `image_id` varchar(250) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_best_images`
--

INSERT INTO `log_best_images` (`ID`, `user_id`, `image_url`, `image_id`, `datetime`, `status`) VALUES
(46, 3, 'https://scontent.fcmb7-1.fna.fbcdn.net/v/t1.6435-9/69528317_241102503534532_2927532241045159936_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=dd9801&_nc_eui2=AeEbyOVJtgEMnnZNvrCDIzMXWKQ-t4hRLbdYpD63iFEtt0Oj4EGBgGGBh_0XYsEzRKHKL5cAyKtDhsHsu8ws0tzW&_nc_ohc=P8AkgnltgY0AX95K5A3&_nc_oc=AQmuUMuOO_HG8_Ua70-0daqA7VTFQhrOQLA3rmF6mk3q7nNNXK75VXG4M1FdOqqObP4&_nc_ht=scontent.fcmb7-1.fna&edm=AP4hL3IEAAAA&oh=b6ff2b2d8dcb4cc4da3ee2a2962a1e59&oe=618805C9', '241102496867866', '2021-10-09 23:06:29', 'yes'),
(47, 3, 'https://scontent.fcmb7-1.fna.fbcdn.net/v/t31.18172-8/28235407_605168039858046_1138835160771194631_o.jpg?_nc_cat=109&ccb=1-5&_nc_sid=8024bb&_nc_eui2=AeFH3zgbzmViUigBdYs1AsLaBf2B__L2hJ0F_YH_8vaEnWXsO-FiO8935CaLCuyuofhamxby5sIMdDZukPEMfHz5&_nc_ohc=hi2HHru9agkAX9uw6Bz&_nc_ht=scontent.fcmb7-1.fna&edm=AP4hL3IEAAAA&oh=c83140a35e44b1accd079267131fb097&oe=61877C7A', '605168039858046', '2021-10-09 23:06:29', 'yes'),
(97, 1, 'https://scontent.fcmb7-1.fna.fbcdn.net/v/t1.6435-9/66170998_2890028854346128_2688292727182852096_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=110474&_nc_eui2=AeE90vzwd4QxjWX2n1KwMkq6QaLaz9vH-vJBotrP28f68nTBmDoY5Cmj7LGarERIs48HU_KjDJbFEWenNlexwiSZ&_nc_ohc=DBkP8gwA5UsAX8VvaYY&_nc_ht=scontent.fcmb7-1.fna&edm=AP4hL3IEAAAA&oh=a38bd3c925389d64adcf219ea2d1ed19&oe=6188BCB5', '2890028821012798', '2021-10-11 02:14:06', 'yes'),
(98, 1, 'https://scontent.fcmb7-1.fna.fbcdn.net/v/t1.6435-9/61972194_2826338447381836_4288969713473552384_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=110474&_nc_eui2=AeG9NRtoc5ClrHUC7VufzNqig0oE7SBiAd-DSgTtIGIB34bvF1MFdJ1VJiMp_WTc-NuBv9-rzp8LcCyUzqD5ckUQ&_nc_ohc=T3dMLplvYl8AX9k3NRs&_nc_ht=scontent.fcmb7-1.fna&edm=AP4hL3IEAAAA&oh=631fa8e5fc6a7283f126f87da83c6f09&oe=61877C6F', '2826338440715170', '2021-10-11 02:14:06', 'yes'),
(99, 1, 'https://scontent.fcmb7-1.fna.fbcdn.net/v/t1.6435-9/53694092_2692253807456968_2233404485936349184_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=110474&_nc_eui2=AeENQvu7HVs-COWiAJXmu_N6-MR7hXQXyon4xHuFdBfKieWAt3HwXSCkkjevpaz9zzgoCrrBlvgC7SxBXvmL_2Bn&_nc_ohc=HYQ-E63XhAYAX8CfWrs&_nc_ht=scontent.fcmb7-1.fna&edm=AP4hL3IEAAAA&oh=cb6be6219fb414e236a0ecd877cb6266&oe=6189DD9A', '2692253797456969', '2021-10-11 02:14:06', 'yes'),
(100, 1, 'https://scontent.fcmb7-1.fna.fbcdn.net/v/t1.6435-9/52654498_2646229355392747_2656289272297947136_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=110474&_nc_eui2=AeH2pkcYl_QXJDpXBkmo8k-XfOuMd1Y5sDx864x3VjmwPEqjJnViYZrFZtCeJV9Tv-AM_KiHFTSDJeLygX39m5dq&_nc_ohc=tFi1swYzwEAAX-eEa3a&_nc_ht=scontent.fcmb7-1.fna&edm=AP4hL3IEAAAA&oh=3dcb17d076126a453e9f2350c3afaee3&oe=618985A0', '2646229352059414', '2021-10-11 02:14:06', 'yes'),
(101, 1, 'https://scontent.fcmb7-1.fna.fbcdn.net/v/t1.6435-9/52486492_2646227912059558_1571752687949578240_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=110474&_nc_eui2=AeH3Jcl9zfJw4LXmiq1nxTrBYJzciEYyDadgnNyIRjINp-FwHrK3Rb1iFaueB4bOdXK94kwsMLA1uSIlqOBCaFsQ&_nc_ohc=ticOwXjJd9IAX8I0C7L&_nc_ht=scontent.fcmb7-1.fna&edm=AP4hL3IEAAAA&oh=ebad82b93dee7d4a73472ec635c0c8b1&oe=61875154', '2646227908726225', '2021-10-11 02:14:06', 'yes'),
(102, 1, 'https://scontent.fcmb7-1.fna.fbcdn.net/v/t1.6435-9/49323222_2564200196928997_5257325942111469568_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=110474&_nc_eui2=AeE7wZ7pePfIuRzvUQZKcs6NE7et0NKmhmwTt63Q0qaGbA6ko9zIrNPs8bBUQMTO35bAJBLKwM3JmJNEiX1ejOsD&_nc_ohc=xlMnu4hXjNoAX9woPVb&_nc_ht=scontent.fcmb7-1.fna&edm=AP4hL3IEAAAA&oh=65e01cba1a1b844a8bdb03a169f2be0c&oe=61874109', '2564200190262331', '2021-10-11 02:14:06', 'yes'),
(103, 1, 'https://scontent.fcmb7-1.fna.fbcdn.net/v/t1.6435-9/47390956_2522260554456295_8739559209504342016_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=110474&_nc_eui2=AeFb6puxJCjo2HV_XGsYfy1PyTqTOHHmyDvJOpM4cebIO9zUnKj9tyd6vnigTMSMrzSl0gxoUl1ji1wtkRbvg33N&_nc_ohc=yYnjcVPa-uAAX9P1iBE&_nc_ht=scontent.fcmb7-1.fna&edm=AP4hL3IEAAAA&oh=71c32d5f8fe4212bb6538b0ef05c6f65&oe=61877309', '2522260551122962', '2021-10-11 02:14:06', 'yes'),
(104, 1, 'https://scontent.fcmb7-1.fna.fbcdn.net/v/t1.6435-9/43950403_1348008612006833_1746403452822487040_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=110474&_nc_eui2=AeH6Ha8pi9AESD-OqW4-7zDOcrDDpMGPV9BysMOkwY9X0LwobCFFCKGRRdVV6PFuwdCMFIXsqaalaK9UUk66dZVh&_nc_ohc=otNqwmMVhJcAX8TY_B8&_nc_ht=scontent.fcmb7-1.fna&edm=AP4hL3IEAAAA&oh=ac1bf7990a46a9b195b06b70ff73ae04&oe=61874032', '1348008605340167', '2021-10-11 02:14:06', 'yes'),
(105, 1, 'https://scontent.fcmb7-1.fna.fbcdn.net/v/t1.18169-9/12805659_1288069607875402_7584737161074865917_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=05277f&_nc_eui2=AeHe0m6GPEn5afIaWOKRlPbaWGRHcWCltmNYZEdxYKW2Y9kRVuUBO7NR4jDVcQRWs3qRBBzhnkuoowq7qzTGFJez&_nc_ohc=6EdlSHdM6GcAX8PxH62&_nc_ht=scontent.fcmb7-1.fna&edm=AP4hL3IEAAAA&oh=4dee63e0cab0d00cecac6a3be26c8daa&oe=618804B3', '1288069607875402', '2021-10-11 02:14:06', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `log_user_tb`
--

CREATE TABLE `log_user_tb` (
  `ID` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_title` text NOT NULL,
  `user_dob` date NOT NULL,
  `user_city` varchar(100) NOT NULL,
  `user_roll` varchar(100) NOT NULL,
  `user_profile_url` text NOT NULL,
  `user_cover_url` text NOT NULL,
  `user_fb_id` varchar(250) NOT NULL,
  `user_active` varchar(10) NOT NULL DEFAULT 'no',
  `user_status` varchar(10) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_user_tb`
--

INSERT INTO `log_user_tb` (`ID`, `user_email`, `user_name`, `user_title`, `user_dob`, `user_city`, `user_roll`, `user_profile_url`, `user_cover_url`, `user_fb_id`, `user_active`, `user_status`) VALUES
(1, 'professionalwbd@gmail.com', 'Fazmir Mlk', '', '0000-00-00', 'Kandy', '', 'https://scontent.fcmb7-1.fna.fbcdn.net/v/t1.6435-9/52486492_2646227912059558_1571752687949578240_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=110474&_nc_eui2=AeH3Jcl9zfJw4LXmiq1nxTrBYJzciEYyDadgnNyIRjINp-FwHrK3Rb1iFaueB4bOdXK94kwsMLA1uSIlqOBCaFsQ&_nc_ohc=ticOwXjJd9IAX_iGP1Y&_nc_ht=scontent.fcmb7-1.fna&edm=AP4hL3IEAAAA&oh=410a1d06ace091fb27259197464b0aa9&oe=61875154', 'https://scontent.fcmb7-1.fna.fbcdn.net/v/t1.6435-9/52654498_2646229355392747_2656289272297947136_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=110474&_nc_eui2=AeH2pkcYl_QXJDpXBkmo8k-XfOuMd1Y5sDx864x3VjmwPEqjJnViYZrFZtCeJV9Tv-AM_KiHFTSDJeLygX39m5dq&_nc_ohc=tFi1swYzwEAAX_84exP&_nc_ht=scontent.fcmb7-1.fna&edm=AP4hL3IEAAAA&oh=7944ca33edeb9c5f7769b3609cffff4c&oe=61859120', '5169554216393569', 'yes', 'yes'),
(3, '', 'Shimar Riyaz', '', '0000-00-00', '', '', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=1594533767588130&height=800&width=800&ext=1636373347&hash=AeTS0V4nqelLdNIKY7I', '', '1594533767588130', 'yes', 'yes'),
(4, '', 'Gayesha Siriwardhane', '', '0000-00-00', '', '', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=209156154641885&height=800&width=800&ext=1636378686&hash=AeStWs_TOGVH0n1B7eg', '', '209156154641885', 'yes', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_best_images`
--
ALTER TABLE `log_best_images`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `log_user_tb`
--
ALTER TABLE `log_user_tb`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_best_images`
--
ALTER TABLE `log_best_images`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `log_user_tb`
--
ALTER TABLE `log_user_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
