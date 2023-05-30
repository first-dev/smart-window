-- insert configurations
INSERT OR REPLACE INTO configurations (name, value) VALUES ('mode', 'schedule');
INSERT OR REPLACE INTO configurations (name, value) VALUES ('keep-cool', '0');
-- empty the schedules table
DELETE FROM schedules;
-- insert schedules
INSERT INTO schedules (action, date) VALUES ('window-open', '2017-11-19 20:00:00');
INSERT INTO schedules (action, date) VALUES ('window-close', '2017-11-19 21:00:00');
-- empty the actions table
DELETE FROM actions;
-- insert actions
INSERT INTO actions (action, date) VALUES ('window-open', '2017-11-19 19:00:00');
INSERT INTO actions (action, date) VALUES ('window-close', '2017-11-19 19:30:00');


