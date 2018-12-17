<?php

return [
    'alipay' => [
        'app_id' => '2016092200573587',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA11leYAwXGzGwP2Em5Vtvz/faLbwJJQoJWbAsZ3SpSdv3Q+z8oBCX/Rss7kWivroV6t97dYUGKjv+diTXgQBNo9IvlWwDNxKhEJb62oZiFCqYwT/soXACidFurtAdPHH2oY8FeyL5BFZmFz8xqo4H0ljiIP/Z2lM2Zhxz39BglBTCPFCprlAGQhM88c8IZ6A0A2kRMq2wtmVxslTTilpGyafxuHrn5lTOJZfQdPyDnn4DT7O8g72/+3Nz0XOcWny3UQ/qzPOBSWk5mOuFzycVxRsXn2w+3S4Er+KqjLvvFGqsANhEHcbgLURh+qIKUGCPKd/dAtHl3D/NFygA9fAxaQIDAQAB',
        'private_key' => 'MIIEpQIBAAKCAQEA11leYAwXGzGwP2Em5Vtvz/faLbwJJQoJWbAsZ3SpSdv3Q+z8oBCX/Rss7kWivroV6t97dYUGKjv+diTXgQBNo9IvlWwDNxKhEJb62oZiFCqYwT/soXACidFurtAdPHH2oY8FeyL5BFZmFz8xqo4H0ljiIP/Z2lM2Zhxz39BglBTCPFCprlAGQhM88c8IZ6A0A2kRMq2wtmVxslTTilpGyafxuHrn5lTOJZfQdPyDnn4DT7O8g72/+3Nz0XOcWny3UQ/qzPOBSWk5mOuFzycVxRsXn2w+3S4Er+KqjLvvFGqsANhEHcbgLURh+qIKUGCPKd/dAtHl3D/NFygA9fAxaQIDAQABAoIBAQC4DP2IAU1ORK1pvdLMe9WYXTDvnaIDMgzDxrpswVxeb81pFIblFsmP3UYNbx6k+833q4GM82BNgHD+8IXvDx9MQDvC7UniK93Um/VSB0CUE8PyhnvrjhvdRk3ewqf6HTy438/DaiSB/IXMoIoGRtWQhb7ejUzYN/5qTy8JvsKMS4/VzJpPQqx3I9ccpJ3SyNi7vibd5zQGWDtdRXuGjj1glRd1HwoDnSa9h4nhuJVDOz8UIDC8Pxi5Pkl+xPBXP7WslFe0ijblkRlkE4A841D4B91m1c1LAAEuyMkWqh9ED76OUpL7LGG+YZ/v4smFKmYrYpeitGnm/gWFH9WCyQkxAoGBAPZjc1HrV8yrMpc3x53M8jE2wbdThsW4aT0v4vmtE0Llm9Qr0+7TRAn7BQqE/DRrKEze7gmFyVWJZE0jSSYoDfBYJv5di+XhBNzRUVIwHdJQ7CK94siPfCqOVoBfWLb/FPyoOtS3/gyDKKlUbxOib3O6o+/QLlh1WQeX3qbe6JgrAoGBAN+/8cy1/CzSBIrjBJuoMjDGhCDeaUpTGqLxaU9Oc7I7PX6PkN/MAgnmK7P/T2H+vFq5PqEcREjXkHIbL/f12Lv7zrTIBq32/XV9xsDBQwHX7NMjhQThKwXiihl4YhOn8OKsB5dx7S9j0VJycvribeIq8rZiD8cezGN0sfdynB67AoGBAL9gD7qZaeD3OJxsHwhan+PJ/D1BC3WX/2YfQ9VasZNMdPUf9cWTI039Q7UgBiVQ9kR/A7UxzWg7B0VDGxYgFnOQhPkeAAPV+8jobJnB9efeIwv5IaVWjcMgO+AKLwY0q0B0Cv4ey508YuDjTEOb76WcWqlysgzTWQuk0rQaf99xAoGBAM4KdWHrm6Kya1hyIUYtprpftECITzEQQhEWecF8HvJbtw8aqXBM7vuqp0gDrVgyOcTZnSDDZOYnC27oNk4CaGkDQqAbKnt8XH6bKjFKRqgl7IGpzc5mgzXSHRXDU52CI0K44+zEDoR7SMDBf7wkUsfYgNUOjDTy2YgkZ9XUBowNAoGABaXpNdY2kIndRJOqw36m9jy0dRnZfazeIp6qGJo3lpOe6B9tTxUouHElOYV0qSgQVxuq0r3ZLUdVDdc2yIoZGTnEvloWUPx0OgEQGzE1YefR2koRa57JcOFfQlNwxr1OXzs6uy6WrU+otKGzlbAMZSxwBVroVJQKoWowNUBxHCo=',
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