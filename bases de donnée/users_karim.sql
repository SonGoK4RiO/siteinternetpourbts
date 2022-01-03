SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `users_karim` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `LAST_ONLINE` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `USER_STATUS` int NOT NULL COMMENT '1 : admin, 2 : modo; 3 : wiki editor',
  `USER_BIO` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `TOKEN` text NOT NULL,
  `PFP_URL` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

ALTER TABLE `users_karim`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

ALTER TABLE `users_karim`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
COMMIT;
