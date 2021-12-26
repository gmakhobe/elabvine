<?php

$sql = "

--
-- Table structure for table `all_members_".$companyuri."`
--

CREATE TABLE `all_members_".$companyuri."` (
  `Member_Id` bigint(20) NOT NULL,
  `Name_and_Surname` varchar(150) NOT NULL,
  `Short_Bio` varchar(2000) NOT NULL,
  `Grade` enum('NA','Primary School','Secondary School','High School','College','University') NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Account_Type` enum('Tutor','Student') NOT NULL,
  `Country` varchar(150) NOT NULL,
  `Cell_Number` varchar(20) NOT NULL,
  `Email_Address` varchar(150) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Registration_Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Gender` enum('Male','Female') NOT NULL,
  `Id_Number` varchar(150) NOT NULL,
  `Display` varchar(2000) NOT NULL,
  `Account_Status` enum('Step 1','Finished') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `ask_".$companyuri."`
--

CREATE TABLE `ask_".$companyuri."` (
  `ask_id` bigint(20) NOT NULL,
  `Member_Id` bigint(20) NOT NULL,
  `tutor_id` bigint(20) NOT NULL,
  `gig_code_id` varchar(150) NOT NULL,
  `status` enum('No','Yes') NOT NULL,
  `ask_amount` double NOT NULL,
  `asked_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chats_".$companyuri."`
--

CREATE TABLE `chats_".$companyuri."` (
  `chats_id` bigint(20) NOT NULL,
  `Member_Id` bigint(20) NOT NULL,
  `tutor_id` bigint(20) NOT NULL,
  `last_chat_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `finance_".$companyuri."`
--

CREATE TABLE `finance_".$companyuri."` (
  `finance_id` bigint(20) NOT NULL,
  `full_amount` float NOT NULL,
  `net_amount` float NOT NULL,
  `commision` float NOT NULL,
  `main_source` bigint(20) NOT NULL,
  `to_source` bigint(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gigs_".$companyuri."`
--

CREATE TABLE `gigs_".$companyuri."` (
  `Gig_Id` int(11) NOT NULL,
  `Member_Id` bigint(20) NOT NULL,
  `Gig_Name` varchar(150) NOT NULL,
  `Gig_Level` varchar(150) NOT NULL,
  `Gig_Description` varchar(2000) NOT NULL,
  `Gig_Attachment_Link` varchar(2000) NOT NULL,
  `Gig_Skill` varchar(200) NOT NULL,
  `Gig_Estimated_Price` varchar(150) NOT NULL,
  `Gig_Estimated_Time` date NOT NULL,
  `Status` enum('In Progress','Finished','Reported') NOT NULL,
  `Date_Gig_Posted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Gig_End_Date` datetime NOT NULL,
  `Tutor_Id` bigint(20) NOT NULL,
  `Gig_Reference_Id` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `members_balance_".$companyuri."`
--

CREATE TABLE `members_balance_".$companyuri."` (
  `Member_Balance_Id` bigint(20) NOT NULL,
  `Member_Balance` float NOT NULL,
  `Member_Id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages_".$companyuri."`
--

CREATE TABLE `messages_".$companyuri."` (
  `message_id` bigint(20) NOT NULL,
  `chats_id` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `message_summary` text NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `milestone_payments_".$companyuri."`
--

CREATE TABLE `milestone_payments_".$companyuri."` (
  `Milestone_Id` bigint(20) NOT NULL,
  `Member_Id` bigint(20) NOT NULL,
  `Tutor_Id` int(11) NOT NULL,
  `Milestone` float NOT NULL,
  `Milestone_Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `First_Milestone` float NOT NULL,
  `Second_Milestone` float NOT NULL,
  `First_Milestone_Date` datetime NOT NULL,
  `Second_Milestone_Date` datetime NOT NULL,
  `Gig_Code_Id` varchar(150) NOT NULL,
  `Withdrawal_Status` enum('In','Out','Claimed') NOT NULL DEFAULT 'In',
  `Status` enum('No','Yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newsfeed_".$companyuri."`
--

CREATE TABLE `newsfeed_".$companyuri."` (
  `Newsfeed_id` bigint(20) NOT NULL,
  `Newsfeed_Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Newsfeed_Title` varchar(100) NOT NULL,
  `Newsfeed_Content_Description` varchar(2000) NOT NULL,
  `Newsfeed_Content` varchar(2000) NOT NULL,
  `Newsfeed_Content_Image_Name` varchar(2000) NOT NULL,
  `Newsfeed_Avatar_Name` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifications_".$companyuri."`
--

CREATE TABLE `notifications_".$companyuri."` (
  `Notification_Id` bigint(11) NOT NULL,
  `Member_Id` bigint(20) NOT NULL,
  `Notification_Subject` varchar(25) NOT NULL,
  `Notification_Summary` varchar(65) NOT NULL,
  `Notification_Text` text NOT NULL,
  `Notification_Status` int(1) NOT NULL,
  `Notifier` enum('General','Admin') NOT NULL,
  `Notification_Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ratings_".$companyuri."`
--

CREATE TABLE `ratings_".$companyuri."` (
  `rating_id` int(11) NOT NULL,
  `Member_Id` bigint(20) DEFAULT NULL,
  `rating_member_name_and_surname` varchar(150) NOT NULL,
  `profile_picture_url` varchar(2000) NOT NULL,
  `rating` int(11) NOT NULL,
  `rating_title` varchar(150) NOT NULL,
  `rating_text` varchar(500) DEFAULT NULL,
  `rated_date` varchar(150) DEFAULT NULL,
  `rated_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `improvement_suggestion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reports_".$companyuri."`
--

CREATE TABLE `reports_".$companyuri."` (
  `report_id` int(11) NOT NULL,
  `Member_Id` bigint(20) NOT NULL,
  `gig_reference` varchar(150) NOT NULL,
  `gig_reason` varchar(150) NOT NULL,
  `gig_comment` varchar(2000) NOT NULL,
  `gig_report_status` enum('Not Reviewed','Reviewed','Canceled') NOT NULL,
  `reported_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_change_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutors_profile_".$companyuri."`
--

CREATE TABLE `tutors_profile_".$companyuri."` (
  `Tutor_Profile_Id` int(11) NOT NULL,
  `Member_Id` bigint(20) NOT NULL,
  `Tutor_Name` varchar(200) NOT NULL,
  `Tutor_Level` varchar(150) NOT NULL,
  `Tutor_Skill` varchar(500) NOT NULL,
  `Tutor_Syllabus` varchar(200) NOT NULL,
  `Tutor_Short_Description` varchar(500) NOT NULL,
  `Tutor_Journey` varchar(2000) NOT NULL,
  `Tutor_Id_Copy_Document` varchar(2000) NOT NULL,
  `Tutor_Achievement_Document` varchar(2000) NOT NULL,
  `Status` enum('Unpublished','Published') NOT NULL,
  `Verified` enum('No','Yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_members_".$companyuri."`
--
ALTER TABLE `all_members_".$companyuri."`
  ADD PRIMARY KEY (`Member_Id`),
  ADD UNIQUE KEY `Email_Address` (`Email_Address`);

--
-- Indexes for table `ask_".$companyuri."`
--
ALTER TABLE `ask_".$companyuri."`
  ADD PRIMARY KEY (`ask_id`),
  ADD KEY `Member_Id` (`Member_Id`);

--
-- Indexes for table `chats_".$companyuri."`
--
ALTER TABLE `chats_".$companyuri."`
  ADD PRIMARY KEY (`chats_id`);

--
-- Indexes for table `finance_".$companyuri."`
--
ALTER TABLE `finance_".$companyuri."`
  ADD PRIMARY KEY (`finance_id`);

--
-- Indexes for table `gigs_".$companyuri."`
--
ALTER TABLE `gigs_".$companyuri."`
  ADD PRIMARY KEY (`Gig_Id`),
  ADD UNIQUE KEY `gig_code_id` (`Gig_Reference_Id`),
  ADD KEY `Member_Id` (`Member_Id`);

--
-- Indexes for table `members_balance_".$companyuri."`
--
ALTER TABLE `members_balance_".$companyuri."`
  ADD PRIMARY KEY (`Member_Balance_Id`),
  ADD UNIQUE KEY `Member_Id` (`Member_Id`);

--
-- Indexes for table `messages_".$companyuri."`
--
ALTER TABLE `messages_".$companyuri."`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `milestone_payments_".$companyuri."`
--
ALTER TABLE `milestone_payments_".$companyuri."`
  ADD PRIMARY KEY (`Milestone_Id`);

--
-- Indexes for table `newsfeed_".$companyuri."`
--
ALTER TABLE `newsfeed_".$companyuri."`
  ADD PRIMARY KEY (`Newsfeed_id`);

--
-- Indexes for table `notifications_".$companyuri."`
--
ALTER TABLE `notifications_".$companyuri."`
  ADD PRIMARY KEY (`Notification_Id`),
  ADD KEY `Member_Id` (`Member_Id`);

--
-- Indexes for table `ratings_".$companyuri."`
--
ALTER TABLE `ratings_".$companyuri."`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `Member_Id` (`Member_Id`);

--
-- Indexes for table `reports_".$companyuri."`
--
ALTER TABLE `reports_".$companyuri."`
  ADD PRIMARY KEY (`report_id`),
  ADD UNIQUE KEY `gig_reference` (`gig_reference`),
  ADD KEY `Member_Id` (`Member_Id`);

--
-- Indexes for table `tutors_profile_".$companyuri."`
--
ALTER TABLE `tutors_profile_".$companyuri."`
  ADD PRIMARY KEY (`Tutor_Profile_Id`),
  ADD UNIQUE KEY `Member_Id` (`Member_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_members_".$companyuri."`
--
ALTER TABLE `all_members_".$companyuri."`
  MODIFY `Member_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `ask_".$companyuri."`
--
ALTER TABLE `ask_".$companyuri."`
  MODIFY `ask_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `chats_".$companyuri."`
--
ALTER TABLE `chats_".$companyuri."`
  MODIFY `chats_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `finance_".$companyuri."`
--
ALTER TABLE `finance_".$companyuri."`
  MODIFY `finance_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gigs_".$companyuri."`
--
ALTER TABLE `gigs_".$companyuri."`
  MODIFY `Gig_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `members_balance_".$companyuri."`
--
ALTER TABLE `members_balance_".$companyuri."`
  MODIFY `Member_Balance_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `messages_".$companyuri."`
--
ALTER TABLE `messages_".$companyuri."`
  MODIFY `message_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `milestone_payments_".$companyuri."`
--
ALTER TABLE `milestone_payments_".$companyuri."`
  MODIFY `Milestone_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `newsfeed_".$companyuri."`
--
ALTER TABLE `newsfeed_".$companyuri."`
  MODIFY `Newsfeed_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notifications_".$companyuri."`
--
ALTER TABLE `notifications_".$companyuri."`
  MODIFY `Notification_Id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;
--
-- AUTO_INCREMENT for table `ratings_".$companyuri."`
--
ALTER TABLE `ratings_".$companyuri."`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `reports_".$companyuri."`
--
ALTER TABLE `reports_".$companyuri."`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tutors_profile_".$companyuri."`
--
ALTER TABLE `tutors_profile_".$companyuri."`
  MODIFY `Tutor_Profile_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ask_".$companyuri."`
--
ALTER TABLE `ask_".$companyuri."`
  ADD CONSTRAINT `ask_ibfk_1` FOREIGN KEY (`Member_Id`) REFERENCES `all_members_".$companyuri."` (`Member_Id`);

--
-- Constraints for table `gigs_".$companyuri."`
--
ALTER TABLE `gigs_".$companyuri."`
  ADD CONSTRAINT `gigs_ibfk_1` FOREIGN KEY (`Member_Id`) REFERENCES `all_members_".$companyuri."` (`Member_Id`);

--
-- Constraints for table `members_balance_".$companyuri."`
--
ALTER TABLE `members_balance_".$companyuri."`
  ADD CONSTRAINT `members_balance_ibfk_1` FOREIGN KEY (`Member_Id`) REFERENCES `all_members_".$companyuri."` (`Member_Id`);

--
-- Constraints for table `notifications_".$companyuri."`
--
ALTER TABLE `notifications_".$companyuri."`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`Member_Id`) REFERENCES `all_members_".$companyuri."` (`Member_Id`);

--
-- Constraints for table `ratings_".$companyuri."`
--
ALTER TABLE `ratings_".$companyuri."`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`Member_Id`) REFERENCES `all_members_".$companyuri."` (`Member_Id`);

--
-- Constraints for table `reports_".$companyuri."`
--
ALTER TABLE `reports_".$companyuri."`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`Member_Id`) REFERENCES `all_members_".$companyuri."` (`Member_Id`);

--
-- Constraints for table `tutors_profile_".$companyuri."`
--
ALTER TABLE `tutors_profile_".$companyuri."`
  ADD CONSTRAINT `tutors_profile_ibfk_1` FOREIGN KEY (`Member_Id`) REFERENCES `all_members_".$companyuri."` (`Member_Id`);
COMMIT;

";
?>