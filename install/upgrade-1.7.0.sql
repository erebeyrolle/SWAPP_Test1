#A bit of optimizing never hurt anyone... (added v1.5.6)
OPTIMIZE TABLE `%TICKET_TABLE%`;
OPTIMIZE TABLE `%TICKET_PREFIX%answers`;
OPTIMIZE TABLE `%TICKET_PREFIX%attachments`;
OPTIMIZE TABLE `%TICKET_PREFIX%banlist`;
OPTIMIZE TABLE `%TICKET_PREFIX%categories`;
OPTIMIZE TABLE `%TICKET_PREFIX%config`;
OPTIMIZE TABLE `%TICKET_PREFIX%groups`;
OPTIMIZE TABLE `%TICKET_PREFIX%messages`;
OPTIMIZE TABLE `%TICKET_PREFIX%privmsg`;
OPTIMIZE TABLE `%TICKET_PREFIX%reps`;
ALTER TABLE `%TICKET_TABLE%` COMMENT = '1.7.3';
ALTER TABLE `%TICKET_PREFIX%answers` COMMENT = '1.7.3'; 
ALTER TABLE `%TICKET_PREFIX%attachments` COMMENT = '1.7.3';
ALTER TABLE `%TICKET_PREFIX%banlist` COMMENT = '1.7.3';
ALTER TABLE `%TICKET_PREFIX%categories` COMMENT = '1.7.3';
ALTER TABLE `%TICKET_PREFIX%groups` COMMENT = '1.7.3';
ALTER TABLE `%TICKET_PREFIX%messages` COMMENT = '1.7.3';
ALTER TABLE `%TICKET_PREFIX%privmsg` COMMENT = '1.7.3';
ALTER TABLE `%TICKET_PREFIX%reps` COMMENT = '1.7.3';
ALTER TABLE `%TICKET_PREFIX%settings` COMMENT = '1.7.3';