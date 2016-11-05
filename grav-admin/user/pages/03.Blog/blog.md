---
title: blog
visible: false
content:
    items: '@self.children'
    limit: 10
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
---

{% for p in page.collection %}
<h2>{{ p.title }}</h2>
{{ p.summary }}
{% endfor %}