-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 28 Mai 2015 à 10:58
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `bans`
--

CREATE TABLE IF NOT EXISTS `bans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `expire` int(10) unsigned DEFAULT NULL,
  `ban_creator` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `bans_username_idx` (`username`(25))
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(80) NOT NULL DEFAULT 'New Category',
  `disp_position` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `disp_position`) VALUES
(2, 'Fruits', 1),
(3, 'Légumes', 1);

-- --------------------------------------------------------

--
-- Structure de la table `censoring`
--

CREATE TABLE IF NOT EXISTS `censoring` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `search_for` varchar(60) NOT NULL DEFAULT '',
  `replace_with` varchar(60) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `conf_name` varchar(255) NOT NULL DEFAULT '',
  `conf_value` text,
  PRIMARY KEY (`conf_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `config`
--

INSERT INTO `config` (`conf_name`, `conf_value`) VALUES
('o_cur_version', '1.5.8'),
('o_database_revision', '21'),
('o_searchindex_revision', '2'),
('o_parser_revision', '2'),
('o_board_title', 'Forum Lebiocoin'),
('o_board_desc', '<p><span></span></p>'),
('o_default_timezone', '0'),
('o_time_format', 'H:i:s'),
('o_date_format', 'd-m-Y'),
('o_timeout_visit', '1800'),
('o_timeout_online', '300'),
('o_redirect_delay', '1'),
('o_show_version', '0'),
('o_show_user_info', '1'),
('o_show_post_count', '1'),
('o_signatures', '1'),
('o_smilies', '1'),
('o_smilies_sig', '1'),
('o_make_links', '1'),
('o_default_lang', 'French'),
('o_default_style', 'Earth'),
('o_default_user_group', '4'),
('o_topic_review', '15'),
('o_disp_topics_default', '30'),
('o_disp_posts_default', '25'),
('o_indent_num_spaces', '4'),
('o_quote_depth', '3'),
('o_quickpost', '1'),
('o_users_online', '1'),
('o_censoring', '0'),
('o_show_dot', '0'),
('o_topic_views', '1'),
('o_quickjump', '1'),
('o_gzip', '0'),
('o_additional_navlinks', ''),
('o_report_method', '0'),
('o_regs_report', '0'),
('o_default_email_setting', '1'),
('o_mailing_list', 'cldejessey@hotmail.fr'),
('o_avatars', '1'),
('o_avatars_dir', 'img/avatars'),
('o_avatars_width', '60'),
('o_avatars_height', '60'),
('o_avatars_size', '10240'),
('o_search_all_forums', '1'),
('o_base_url', 'http://localhost/lebiocoin/forum'),
('o_admin_email', 'cldejessey@hotmail.fr'),
('o_webmaster_email', 'cldejessey@hotmail.fr'),
('o_forum_subscriptions', '1'),
('o_topic_subscriptions', '1'),
('o_smtp_host', NULL),
('o_smtp_user', NULL),
('o_smtp_pass', NULL),
('o_smtp_ssl', '0'),
('o_regs_allow', '1'),
('o_regs_verify', '0'),
('o_announcement', '0'),
('o_announcement_message', 'Enter your announcement here.'),
('o_rules', '0'),
('o_rules_message', 'Enter your rules here'),
('o_maintenance', '0'),
('o_maintenance_message', 'The forums are temporarily down for maintenance. Please try again in a few minutes.'),
('o_default_dst', '0'),
('o_feed_type', '2'),
('o_feed_ttl', '0'),
('p_message_bbcode', '1'),
('p_message_img_tag', '1'),
('p_message_all_caps', '1'),
('p_subject_all_caps', '1'),
('p_sig_all_caps', '1'),
('p_sig_bbcode', '1'),
('p_sig_img_tag', '0'),
('p_sig_length', '400'),
('p_sig_lines', '4'),
('p_allow_banned_email', '1'),
('p_allow_dupe_email', '0'),
('p_force_guest_email', '1');

-- --------------------------------------------------------

--
-- Structure de la table `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `forum_name` varchar(80) NOT NULL DEFAULT 'New forum',
  `forum_desc` text,
  `redirect_url` varchar(100) DEFAULT NULL,
  `moderators` text,
  `num_topics` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `num_posts` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `last_post` int(10) unsigned DEFAULT NULL,
  `last_post_id` int(10) unsigned DEFAULT NULL,
  `last_poster` varchar(200) DEFAULT NULL,
  `sort_by` tinyint(1) NOT NULL DEFAULT '0',
  `disp_position` int(10) NOT NULL DEFAULT '0',
  `cat_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `forums`
--

INSERT INTO `forums` (`id`, `forum_name`, `forum_desc`, `redirect_url`, `moderators`, `num_topics`, `num_posts`, `last_post`, `last_post_id`, `last_poster`, `sort_by`, `disp_position`, `cat_id`) VALUES
(2, 'test', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, 0, 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `forum_perms`
--

CREATE TABLE IF NOT EXISTS `forum_perms` (
  `group_id` int(10) NOT NULL DEFAULT '0',
  `forum_id` int(10) NOT NULL DEFAULT '0',
  `read_forum` tinyint(1) NOT NULL DEFAULT '1',
  `post_replies` tinyint(1) NOT NULL DEFAULT '1',
  `post_topics` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`group_id`,`forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `forum_subscriptions`
--

CREATE TABLE IF NOT EXISTS `forum_subscriptions` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `forum_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `g_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `g_title` varchar(50) NOT NULL DEFAULT '',
  `g_user_title` varchar(50) DEFAULT NULL,
  `g_promote_min_posts` int(10) unsigned NOT NULL DEFAULT '0',
  `g_promote_next_group` int(10) unsigned NOT NULL DEFAULT '0',
  `g_moderator` tinyint(1) NOT NULL DEFAULT '0',
  `g_mod_edit_users` tinyint(1) NOT NULL DEFAULT '0',
  `g_mod_rename_users` tinyint(1) NOT NULL DEFAULT '0',
  `g_mod_change_passwords` tinyint(1) NOT NULL DEFAULT '0',
  `g_mod_ban_users` tinyint(1) NOT NULL DEFAULT '0',
  `g_mod_promote_users` tinyint(1) NOT NULL DEFAULT '0',
  `g_read_board` tinyint(1) NOT NULL DEFAULT '1',
  `g_view_users` tinyint(1) NOT NULL DEFAULT '1',
  `g_post_replies` tinyint(1) NOT NULL DEFAULT '1',
  `g_post_topics` tinyint(1) NOT NULL DEFAULT '1',
  `g_edit_posts` tinyint(1) NOT NULL DEFAULT '1',
  `g_delete_posts` tinyint(1) NOT NULL DEFAULT '1',
  `g_delete_topics` tinyint(1) NOT NULL DEFAULT '1',
  `g_post_links` tinyint(1) NOT NULL DEFAULT '1',
  `g_set_title` tinyint(1) NOT NULL DEFAULT '1',
  `g_search` tinyint(1) NOT NULL DEFAULT '1',
  `g_search_users` tinyint(1) NOT NULL DEFAULT '1',
  `g_send_email` tinyint(1) NOT NULL DEFAULT '1',
  `g_post_flood` smallint(6) NOT NULL DEFAULT '30',
  `g_search_flood` smallint(6) NOT NULL DEFAULT '30',
  `g_email_flood` smallint(6) NOT NULL DEFAULT '60',
  `g_report_flood` smallint(6) NOT NULL DEFAULT '60',
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `groups`
--

INSERT INTO `groups` (`g_id`, `g_title`, `g_user_title`, `g_promote_min_posts`, `g_promote_next_group`, `g_moderator`, `g_mod_edit_users`, `g_mod_rename_users`, `g_mod_change_passwords`, `g_mod_ban_users`, `g_mod_promote_users`, `g_read_board`, `g_view_users`, `g_post_replies`, `g_post_topics`, `g_edit_posts`, `g_delete_posts`, `g_delete_topics`, `g_post_links`, `g_set_title`, `g_search`, `g_search_users`, `g_send_email`, `g_post_flood`, `g_search_flood`, `g_email_flood`, `g_report_flood`) VALUES
(1, 'Administrators', 'Administrator', 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0),
(2, 'Moderators', 'Moderator', 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0),
(3, 'Guests', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 60, 30, 0, 0),
(4, 'Members', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 60, 30, 60, 60);

-- --------------------------------------------------------

--
-- Structure de la table `online`
--

CREATE TABLE IF NOT EXISTS `online` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '1',
  `ident` varchar(200) NOT NULL DEFAULT '',
  `logged` int(10) unsigned NOT NULL DEFAULT '0',
  `idle` tinyint(1) NOT NULL DEFAULT '0',
  `last_post` int(10) unsigned DEFAULT NULL,
  `last_search` int(10) unsigned DEFAULT NULL,
  UNIQUE KEY `online_user_id_ident_idx` (`user_id`,`ident`(25)),
  KEY `online_ident_idx` (`ident`(25)),
  KEY `online_logged_idx` (`logged`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `online`
--

INSERT INTO `online` (`user_id`, `ident`, `logged`, `idle`, `last_post`, `last_search`) VALUES
(2, 'aaaaaa', 1432803214, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `poster` varchar(200) NOT NULL DEFAULT '',
  `poster_id` int(10) unsigned NOT NULL DEFAULT '1',
  `poster_ip` varchar(39) DEFAULT NULL,
  `poster_email` varchar(80) DEFAULT NULL,
  `message` mediumtext,
  `hide_smilies` tinyint(1) NOT NULL DEFAULT '0',
  `posted` int(10) unsigned NOT NULL DEFAULT '0',
  `edited` int(10) unsigned DEFAULT NULL,
  `edited_by` varchar(200) DEFAULT NULL,
  `topic_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `posts_topic_id_idx` (`topic_id`),
  KEY `posts_multi_idx` (`poster_id`,`topic_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Structure de la table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned NOT NULL DEFAULT '0',
  `topic_id` int(10) unsigned NOT NULL DEFAULT '0',
  `forum_id` int(10) unsigned NOT NULL DEFAULT '0',
  `reported_by` int(10) unsigned NOT NULL DEFAULT '0',
  `created` int(10) unsigned NOT NULL DEFAULT '0',
  `message` text,
  `zapped` int(10) unsigned DEFAULT NULL,
  `zapped_by` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reports_zapped_idx` (`zapped`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `search_cache`
--

CREATE TABLE IF NOT EXISTS `search_cache` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `ident` varchar(200) NOT NULL DEFAULT '',
  `search_data` mediumtext,
  PRIMARY KEY (`id`),
  KEY `search_cache_ident_idx` (`ident`(8))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `search_matches`
--

CREATE TABLE IF NOT EXISTS `search_matches` (
  `post_id` int(10) unsigned NOT NULL DEFAULT '0',
  `word_id` int(10) unsigned NOT NULL DEFAULT '0',
  `subject_match` tinyint(1) NOT NULL DEFAULT '0',
  KEY `search_matches_word_id_idx` (`word_id`),
  KEY `search_matches_post_id_idx` (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `search_words`
--

CREATE TABLE IF NOT EXISTS `search_words` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `word` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`word`),
  KEY `search_words_id_idx` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `search_words`
--

INSERT INTO `search_words` (`id`, `word`) VALUES
(16, 'test');

-- --------------------------------------------------------

--
-- Structure de la table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `poster` varchar(200) NOT NULL DEFAULT '',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `posted` int(10) unsigned NOT NULL DEFAULT '0',
  `first_post_id` int(10) unsigned NOT NULL DEFAULT '0',
  `last_post` int(10) unsigned NOT NULL DEFAULT '0',
  `last_post_id` int(10) unsigned NOT NULL DEFAULT '0',
  `last_poster` varchar(200) DEFAULT NULL,
  `num_views` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `num_replies` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `closed` tinyint(1) NOT NULL DEFAULT '0',
  `sticky` tinyint(1) NOT NULL DEFAULT '0',
  `moved_to` int(10) unsigned DEFAULT NULL,
  `forum_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `topics_forum_id_idx` (`forum_id`),
  KEY `topics_moved_to_idx` (`moved_to`),
  KEY `topics_last_post_idx` (`last_post`),
  KEY `topics_first_post_id_idx` (`first_post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `topic_subscriptions`
--

CREATE TABLE IF NOT EXISTS `topic_subscriptions` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `topic_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`topic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(10) unsigned NOT NULL DEFAULT '3',
  `username` varchar(200) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  `email` varchar(80) NOT NULL DEFAULT '',
  `title` varchar(50) DEFAULT NULL,
  `realname` varchar(40) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `jabber` varchar(80) DEFAULT NULL,
  `icq` varchar(12) DEFAULT NULL,
  `msn` varchar(80) DEFAULT NULL,
  `aim` varchar(30) DEFAULT NULL,
  `yahoo` varchar(30) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `signature` text,
  `disp_topics` tinyint(3) unsigned DEFAULT NULL,
  `disp_posts` tinyint(3) unsigned DEFAULT NULL,
  `email_setting` tinyint(1) NOT NULL DEFAULT '1',
  `notify_with_post` tinyint(1) NOT NULL DEFAULT '0',
  `auto_notify` tinyint(1) NOT NULL DEFAULT '0',
  `show_smilies` tinyint(1) NOT NULL DEFAULT '1',
  `show_img` tinyint(1) NOT NULL DEFAULT '1',
  `show_img_sig` tinyint(1) NOT NULL DEFAULT '1',
  `show_avatars` tinyint(1) NOT NULL DEFAULT '1',
  `show_sig` tinyint(1) NOT NULL DEFAULT '1',
  `timezone` float NOT NULL DEFAULT '0',
  `dst` tinyint(1) NOT NULL DEFAULT '0',
  `time_format` tinyint(1) NOT NULL DEFAULT '0',
  `date_format` tinyint(1) NOT NULL DEFAULT '0',
  `language` varchar(25) NOT NULL DEFAULT 'French',
  `style` varchar(25) NOT NULL DEFAULT 'Earth',
  `num_posts` int(10) unsigned NOT NULL DEFAULT '0',
  `last_post` int(10) unsigned DEFAULT NULL,
  `last_search` int(10) unsigned DEFAULT NULL,
  `last_email_sent` int(10) unsigned DEFAULT NULL,
  `last_report_sent` int(10) unsigned DEFAULT NULL,
  `registered` int(10) unsigned NOT NULL DEFAULT '0',
  `registration_ip` varchar(39) NOT NULL DEFAULT '0.0.0.0',
  `last_visit` int(10) unsigned NOT NULL DEFAULT '0',
  `admin_note` varchar(30) DEFAULT NULL,
  `activate_string` varchar(80) DEFAULT NULL,
  `activate_key` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_idx` (`username`(25)),
  KEY `users_registered_idx` (`registered`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `group_id`, `username`, `password`, `email`, `title`, `realname`, `url`, `jabber`, `icq`, `msn`, `aim`, `yahoo`, `location`, `signature`, `disp_topics`, `disp_posts`, `email_setting`, `notify_with_post`, `auto_notify`, `show_smilies`, `show_img`, `show_img_sig`, `show_avatars`, `show_sig`, `timezone`, `dst`, `time_format`, `date_format`, `language`, `style`, `num_posts`, `last_post`, `last_search`, `last_email_sent`, `last_report_sent`, `registered`, `registration_ip`, `last_visit`, `admin_note`, `activate_string`, `activate_key`) VALUES
(1, 3, 'Guest', 'Guest', 'Guest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 'French', 'Earth', 0, NULL, NULL, NULL, NULL, 0, '0.0.0.0', 0, NULL, NULL, NULL),
(2, 1, 'aaaaaa', 'f7a9e24777ec23212c54d7a350bc5bea5477fdbb', 'cldejessey@hotmail.fr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 'French', 'Earth', 3, 1432801818, NULL, NULL, NULL, 1432798453, '::1', 1432801673, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
