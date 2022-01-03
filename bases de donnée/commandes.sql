SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `commandes` (
  `nom` text,
  `prenom` text,
  `mail` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `adresse` text,
  `message` text
)
