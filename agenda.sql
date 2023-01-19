SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS agenda;
USE agenda; 

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `observations` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `contacts` (`id`, `name`, `phone`, `observations`) VALUES
(1, 'Daniel', '+55 62 9434-8841', 'amigo da escola'),
(2, 'Miguel', '+55 62 8299-6526', 'Amigo de Infância'),
(3, 'Sebastiao', '+55 62 8592-1148', 'Papai'),
(4, 'Briany', '+55 62 9491-9199', 'Mamãe'),
(5, 'Jp', '+55 62 9293-9010', 'Amigo de Infância'),
(6, 'Jorge', '+55 62 9906-7228', 'Amigo do sétimo ano');

ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123456790;
COMMIT;