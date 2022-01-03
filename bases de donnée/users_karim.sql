CREATE TABLE `users_karim` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_password` varchar(255),
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `LAST_ONLINE` text,
  `USER_STATUS` int,
  `USER_BIO` text,
  `TOKEN` text NOT NULL,
  `PFP_URL` text
);

ALTER TABLE `users_karim`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

ALTER TABLE `users_karim`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
COMMIT;
