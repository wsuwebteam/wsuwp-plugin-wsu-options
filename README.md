# wsuwp-plugin-wsu-options


## Data Structure



### wsuwp
( type | default | description )

- site_options:
    - parent_name:        string | empty | Parent site name
    - parent_name_mobile: string | empty | Parent site name (short)
    - parent_url:         string | empty | url
    - give_link:          string | empty | url
- social_accounts:
    - twitter:   string | empty | url
    - facebook:  string | empty | url 
    - youtube:   string | empty | url
    - instagram: string | empty | url
    - linkedin:  string | empty | url
- wds:
    - show_search: bool | true | Show search/quicklinks section
    - local_search: bool | true | Default search to local site
    - version: string | 2 | current version