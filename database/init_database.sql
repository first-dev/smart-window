CREATE TABLE IF NOT EXISTS temperature (value INTEGER, date DATETIME);

CREATE TABLE IF NOT EXISTS schedules (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  ACTION VARCHAR(255),
  -- window-open | window-close | fan-on | fan-off
  date DATETIME
);

CREATE TABLE IF NOT EXISTS actions (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  ACTION VARCHAR(255),
  date DATETIME
);

CREATE TABLE IF NOT EXISTS configurations (
  name VARCHAR(255),
  -- mode | keep-cool
  value VARCHAR(255)
);

CREATE UNIQUE INDEX idx_configurations_name ON configurations (name);