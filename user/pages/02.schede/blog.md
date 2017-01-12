---
title: Schede
blog_url: schede
sitemap:
    changefreq: monthly
    priority: 1.03

content:
    items: 
        @self.children
    order:
        by: date
        dir: desc
    limit: 10
    pagination: true

feed:
    description: Elenco delle schede presenti.
    limit: 10

pagination: true
---

# Schede
