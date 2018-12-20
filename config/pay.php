<?php

return [
    'alipay' => [
        'app_id' => '2016092200573587',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAt6Rhe/sU4TsG9CnYmKddqiVj/Roo+kC9fZ7zN6EEOdp6jmtvUis6f5ynmMAnJalP2pTmWF4wel526t/SUkEDvtN2BiNZO0vt6SGTA733/5Pi4SOiC61Jv6skwb4TsgcfmKtCje3wlmU+JpJ77Bq4+lnz5fYjZpiUnzjExFEj/Gyyy1PNW8o6VimjqNrtTNbmltWR3nZs/O4ZM4fuEG9FFtHJ9SRWEWbNs46YMihbVWLXH9sm1s6LiMl6O0YqiN6r/no7S9z3oKksJjCJAZqduVHhdCbz31JdOAS/R+08Jo8o6YC97IY723sN6W+GzhCGWdL91Rrq93y0/uXdBl8wrwIDAQAB',
        'private_key' => 'MIIEowIBAAKCAQEAq9PlUOs+v+ZkIPvN0Tpo/bPPEeKsi5rWi2wPI/YklqV4E4WwXwj7wB+2l+5wU4kRFpraMA9aWZrwxyFNh/7+CWv5TXG290ZxMh6lRTB3/ciLQkgRH0kqOeXKEX2qfRsGJvQP0q41GhE+6V1qk3MD8k4oo08xYM7GR3x1pqtnM60XATKt6Dm2ZvzE15sUF2IFmD5tRBPEEE0mCAK15B8/H8+lVLTLpKLMO4dc/Swp74TbqYRpd8HeQhzGJEvTZ4r5wuEjCa3pWxorWQ1oWyacew/aq3AwuMfQx7zv9cc6h6oVHJJk5m7PGzZgJiFb3cCXu9MaPI5a+T7p/Dm14/W2kwIDAQABAoIBAGlrR3Wt3oG9yBC0bEHBpEiC2LgQaev8w0Qmt+NIUIpcWp8flmW4DTyCOHReRWv63BESUGrMAJKZDMAfHoIhX5pINFvfOHHdNfWZ96vLYNLDBy1TKa4YJWAAK0kv4DmBKvUbJ9oKJ2omyoJCXfC4z+MJMMWBALp0IhIZudTXtClvNyG0eQNfogGvlQMsuKAYX0m1A2aCGgo92la7bQNjL4qZDOrvIIsGKxAiV1zFju1zjunrIB/Xmt6edQZLSP0tl0XTcopgJqsbmudRVwj/Q+qvMm8H2z9xyKega/4ESOfDioh8lblAYpA2uw8+r+Tfnjpo9vpr+vVyWN2QLyWSPoECgYEA01T13A0yHzSHPViHx1u43z5GByvHrl1Sqo9kJVH8LzVYEYU9UO92vgJ/lKhDPirGhI8GuClZjx0QPLS3BZWHSr8yGe8+cSNnuGiN5aFzxOEqgigf62HNKGmsgFcdRbO539eHASKaKJJ0dfnr2J1lqGLLjFHPz7U5DeNKCQz5IQ0CgYEA0CVjqnvT6HsvMjaidEdrn8R/zYWRqJ6N3APW4AmHFIOgEutNb4oJydPjxkzHowOU5vXbCzAaT2kkC7KcJKltmbOltkvtX+aYBrwPDmzzPm1BwqxNQE037pkXVxQ4bcXnIINyFhpHljsszocd/HRP6chuBurTzPaESqCR36LsDh8CgYAlXEXCy0prHdwyyi3m3p5GSToUFndMqg7tPEBWILJWnjWdk1KNtmflm4d2fnC00tcZpDdp41WD6X1vXftlL1QlsLtovlTpp3q0rTc4u1w+GBhtvi42bKnaVSQ75Cq2odlgazfgyX87YPjZyn8ZYmoQZLbbbbMxYzZc8CusgfChGQKBgQCyPaJYZotzhLFIxaJeAp72BLYQj/XIuGXwZ1VFKsOC3KhiKx93iXSSYaGmuS8nuDR1h0mZDgspv3Z/kebGOlRBj6YzMlfGjNfYxIf8KW4vIi5y/0tz6ewgpPZoukcMMbGXlRhINx7gVjIrdWdHPW8FWn5l7AeNd/iXU2M3Z/POrwKBgDAvYju9z+CSU9yLLl88Nk71Ix829JPzpKivuKnGThv8iGBbGVYfwPywp9H/Tq88oVc6h5Wm+GaeZrlojn7O73qwUUBBqb4qnzIGEHtpQx5sTn0bt8w+IZ0lO2jEgx5MVhNWUhYoQnm8w2zJoRTf6oJwpkeCouqusvNyOq4qQ9Ax',
        'log' => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id' => '',
        'mch_id' => '',
        'key' => '',
        'cert_client' => '',
        'cert_key' => '',
        'log' => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];