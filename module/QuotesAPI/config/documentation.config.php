<?php
return [
    'QuotesAPI\\V1\\Rest\\Authors\\Controller' => [
        'collection' => [
            'GET' => [
                'response' => '{
   "_links": {
       "self": {
           "href": "/authors"
       },
       "first": {
           "href": "/authors?page={page}"
       },
       "prev": {
           "href": "/authors?page={page}"
       },
       "next": {
           "href": "/authors?page={page}"
       },
       "last": {
           "href": "/authors?page={page}"
       }
   }
   "_embedded": {
       "authors": [
           {
               "_links": {
                   "self": {
                       "href": "/authors[/:authors_id]"
                   }
               }
              "first_name": "",
              "last_name": "",
              "dob": "",
              "created_at": ""
           }
       ]
   }
}',
                'description' => 'Get all the authors',
            ],
            'description' => 'Authors collection',
            'POST' => [
                'request' => '{
   "first_name": "",
   "last_name": "",
   "dob": "",
   "created_at": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/authors[/:authors_id]"
       }
   }
   "first_name": "",
   "last_name": "",
   "dob": "",
   "created_at": ""
}',
                'description' => 'Post to the Authors collection',
            ],
        ],
        'description' => 'Authors API to handle all services.',
        'entity' => [
            'description' => 'Get Author by ID',
            'GET' => [
                'description' => 'Get Author',
                'response' => '{
   "_links": {
       "self": {
           "href": "/authors[/:authors_id]"
       }
   }
   "first_name": "",
   "last_name": "",
   "dob": "",
   "created_at": ""
}',
            ],
            'PATCH' => [
                'description' => 'Patch to the Author',
                'request' => '{
   "first_name": "",
   "last_name": "",
   "dob": "",
   "created_at": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/authors[/:authors_id]"
       }
   }
   "first_name": "",
   "last_name": "",
   "dob": "",
   "created_at": ""
}',
            ],
            'PUT' => [
                'description' => 'Put to the author',
                'request' => '{
   "first_name": "",
   "last_name": "",
   "dob": "",
   "created_at": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/authors[/:authors_id]"
       }
   }
   "first_name": "",
   "last_name": "",
   "dob": "",
   "created_at": ""
}',
            ],
            'DELETE' => [
                'description' => 'Delete the author',
                'request' => '{
   "first_name": "",
   "last_name": "",
   "dob": "",
   "created_at": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/authors[/:authors_id]"
       }
   }
   "first_name": "",
   "last_name": "",
   "dob": "",
   "created_at": ""
}',
            ],
        ],
    ],
];
