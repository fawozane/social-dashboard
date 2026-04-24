CREATE TABLE tx_socialdashboard_stats (
                                          uid INT AUTO_INCREMENT PRIMARY KEY,
                                          platform VARCHAR(50),
                                          followers INT,
                                          likes INT,
                                          comments INT,
                                          impressions INT,
                                          posts INT,
                                          tstamp INT
);
CREATE TABLE tx_socialdashboard_metrics (
                                            uid INT AUTO_INCREMENT PRIMARY KEY,
                                            platform VARCHAR(50),
                                            likes INT,
                                            comments INT,
                                            metric_date INT
);

INSERT INTO tx_socialdashboard_metrics (platform, likes, comments, metric_date)
VALUES
    ('instagram', 10, 2, UNIX_TIMESTAMP() - 86400),
    ('instagram', 20, 5, UNIX_TIMESTAMP());

CREATE TABLE tx_socialdashboard_token (
                                          uid INT AUTO_INCREMENT PRIMARY KEY,
                                          access_token TEXT NOT NULL,
                                          created_at INT NOT NULL
);