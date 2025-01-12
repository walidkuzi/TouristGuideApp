INSERT INTO accommodations (
    accommodation_id,
    name,
    destination_id,
    type,
    description,
    image,
    rating,
    price_per_night,
    created_at,
    updated_at
  )
VALUES (
    accommodation_id:intINSERT INTO activities (
        activity_id,
        name,
        destination_id,
        description,
        image,
        price,
        created_at,
        updated_at
      )
    VALUES (
        activity_id:intINSERT INTO admin (
            admin_id,
            full_name,
            email,
            password,
            created_at,
            updated_at
          )
        VALUES (
            admin_id:intINSERT INTO attractions (
                attraction_id,
                name,
                destination_id,
                type,
                description,
                image,
                created_at,
                updated_at
              )
            VALUES (
                attraction_id:intINSERT INTO destinations (
                    destination_id,
                    name,
                    location,
                    description,
                    image,
                    created_at,
                    updated_at
                  )
                VALUES (
                    destination_id:intINSERT INTO newsletter_subscribers (subscriber_id, email, created_at)
                    VALUES (
                        subscriber_id:intINSERT INTO restaurants (
                            restaurant_id,
                            name,
                            destination_id,
                            type,
                            description,
                            image,
                            rating,
                            created_at,
                            updated_at
                          )
                        VALUES (
                            restaurant_id:intINSERT INTO users (
                                user_id,
                                full_name,
                                email,
                                password,
                                date_of_birth,
                                country,
                                city,
                                phone,
                                profile_picture,
                                created_at,
                                updated_at
                              )
                            VALUES (
                                user_id:intINSERT INTO wishlist (
                                    wishlist_id,
                                    user_id,
                                    item_id,
                                    item_type,
                                    created_at
                                  )
                                VALUES (
                                    wishlist_id:int,
                                    user_id:int,
                                    item_id:int,
                                    'item_type:enum',
                                    'created_at:timestamp'
                                  );,
                                'full_name:varchar',
                                'email:varchar',
                                'password:varchar',
                                'date_of_birth:date',
                                'country:varchar',
                                'city:varchar',
                                'phone:varchar',
                                'profile_picture:varchar',
                                'created_at:timestamp',
                                'updated_at:timestamp'
                              );,
                            'name:varchar',
                            destination_id:int,
                            'type:varchar',
                            'description:text',
                            'image:varchar',
                            'rating:decimal',
                            'created_at:timestamp',
                            'updated_at:timestamp'
                          );,
                        'email:varchar',
                        'created_at:timestamp'
                      );,
                    'name:varchar',
                    'location:varchar',
                    'description:text',
                    'image:varchar',
                    'created_at:timestamp',
                    'updated_at:timestamp'
                  );,
                'name:varchar',
                destination_id:int,
                'type:varchar',
                'description:text',
                'image:varchar',
                'created_at:timestamp',
                'updated_at:timestamp'
              );,
            'full_name:varchar',
            'email:varchar',
            'password:varchar',
            'created_at:timestamp',
            'updated_at:timestamp'
          );,
        'name:varchar',
        destination_id:int,
        'description:text',
        'image:varchar',
        'price:decimal',
        'created_at:timestamp',
        'updated_at:timestamp'
      );,
    'name:varchar',
    destination_id:int,
    'type:varchar',
    'description:text',
    'image:varchar',
    'rating:decimal',
    'price_per_night:decimal',
    'created_at:timestamp',
    'updated_at:timestamp'
  );