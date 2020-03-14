SELECT UPPER(user_card.last_name) 'NAME', user_card.first_name, subscription.price 
FROM user_card, member, subscription 
WHERE user_card.id_user = member.id_user_card AND member.id_sub = subscription.id_sub AND subscription.price > 42 
ORDER BY user_card.last_name ASC, user_card.first_name ASC;