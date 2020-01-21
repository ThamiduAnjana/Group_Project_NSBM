# Group_Project_NSBM
Bootstrap E-commerce website

- Name : ShoppingCard.LK

# ABSTRACT 

In today’s fast-changing business environment, it’s extremely important to be able to respond to client needs in the most effective and timely manner. If your customers wish to see your business online and have instant access to your products or services. 
Online Shopping is a lifestyle e-commerce web application, which retails various fashion and lifestyle products (Currently women’s men’s bags). This project allows viewing various products available enables registered users to purchase desired products instantly using Credit or Debit card payment processor. This project provides an easy access to Administrators and Managers to view orders placed using Pay Later and Instant Pay options. 
In order to develop an e-commerce website, a number of Technologies must be studied and understood. These include multi-tiered architecture, server and client side scripting techniques.  This is a project with the objective to develop a basic website where a consumer is provided with a shopping cart application and also to know about the technologies used to develop such an application. 
This document will discuss each of the underlying technologies to create and implement an ecommerce website.

# ACKNOWLEDGEMENTS 
	
In completing this project we have been fortunate to have help, support and encouragement from many people. I would like to acknowledge them for their cooperation. 
First and foremost deeply thankful to Mr.Naji Saravanabavan, for his wonderful guidance during this project work in field of Web Application and Development. We are also thankful for his continuous feedback and encouragement throughout this project work. His broad knowledge and hardworking attitude has left us with very deep impressions and they will greatly benefit us throughout my life. 
We would like to thank to all people who are helped to complete this project and special thanks to our group also.

# Contents

0   ABSTRACT 
0.1 ACKNOWLEDGEMENTS	
1.	Introduction	
2.	Overall Description	
2.1 Description	
2.2 Using the code	
2.3 Web Pages details:	
3.	System Requirements	
3.1 Use-Case Diagram	
4.	Online Shopping Application	
4.1 HOMEPAGE	
4.2 SIGN-IN PAGE	
4.3 SIGN-UP PAGE	
People who wants to purchase items they have to sign-up.	
4.4 MY PROFILE PAGE	
4.5 BUY NOW PAGE	
4.6 EDIT PROFILE PAGE	
4.7 PURCHASE HISTORY PAGE	
4.8 ACCOUNT DETAILS PAGE	
4.9 ADD ITEMS PAGE
5.	Data Management	
5.1 Data Description	
5.2 Data Objects	
5.3 Database Table Diagram	
6.	Non-Functional / Operational Requirements	
6.1 Security	
6.2 Efficiency and Maintainability	
7.	Conclusion	

# 1.	Introduction

E-commerce is fast gaining ground as an accepted and used business paradigm. More and more business houses are implementing web sites providing functionality for performing commercial transactions over the web. It is reasonable to say that the process of shopping on the web is becoming commonplace. 
The objective of this project is to develop a general purpose e-commerce store where product like bags can be bought from the comfort of home through the Internet. However, for implementation purposes, this paper will deal with an online shopping for bags. 
Sellers can sell products through this web site also. They have to sign up as sellers and they can see different page to insert, update and delete products.
An online store is a virtual store on the Internet where customers can browse the catalog and select products of interest. The selected items may be collected in a shopping cart. At checkout time, the items in the shopping cart will be presented as an order. At that time, more information will be needed to complete the transaction. Usually, the customer will be asked to fill or select a billing address, a shipping address, a shipping option, and payment information such as credit card number. An e-mail notification is sent to the customer as soon as the order is placed.
If customers want to know about new products which are recently add to the web site, they can subscribes our web site and they can know quickly about products which are recently added.


# 2.	Overall Description

2.1 Description

-	Any member can register and view available products. 
-	Any person can register as seller and sell products. 
-	Only registered member can purchase multiple products regardless of quantity. 
-	Contact Us page is available to contact sellers for queries. 
-	There are three roles available: Visitor, User and Sellers. 
- Visitor can view available products. 
- User can view and purchase products
- A Seller has some extra privilege including all privilege of visitor and user. 
-	Seller can add products, edit product information and add, update and remove product. 
-	Seller can add user, edit user information and can remove user.
-	Seller can ship order to user based on order placed by sending confirmation mail.
	
2.2 Using the code

 1. Attach the database in your "MYSQL Server".
 2. Run the application on Sublime Text Build.
 3. Locate the database.

2.3 Web Pages details: 
-	Home Page 
-	Sign-In Page
-	Sign-Up Page
-	My Profile Page
-	Edit Profile Page
-	Account Details Page
-	Buy Now Page
-	Purchase History Page
-	Add items Page



# 3.	System Requirements

3.1 Use-Case Diagram

![UML](https://user-images.githubusercontent.com/46102435/72824836-f5d20280-3c9b-11ea-872f-56e4d8a00899.PNG)

# 4.	Online Shopping Application

Anyone can view Online Shopping portal and available products, but every user must login by his/her Username and password in order to purchase or order products. Unregistered members can register by navigating to registration page. Only Admins will have access to modify roles, by default developer can only be an ‘Admin’. Once user register site, his default role will be ‘User’. Sellers can register by using registration page as sellers. 

4.1 HOMEPAGE
The Home Screen will consist of screen were one can browse through the products which we have on our website
![Index](https://user-images.githubusercontent.com/46102435/72816120-b43a5b00-3c8d-11ea-9959-9d2ddc7f90b7.jpg)

4.2 SIGN-IN PAGE
Users can sign-in and purchase items.
![Signin](https://user-images.githubusercontent.com/46102435/72818223-1ea0ca80-3c91-11ea-9d41-b75376f5aa31.jpg)

4.3 SIGN-UP PAGE
People who wants to purchase items they have to sign-up. 
![Signup](https://user-images.githubusercontent.com/46102435/72818239-27919c00-3c91-11ea-85fa-261e50df0113.jpg)

4.4 MY PROFILE PAGE
After registering website users can view their profile in this page.
![My Profile](https://user-images.githubusercontent.com/46102435/72818248-28c2c900-3c91-11ea-83d3-a1d76c918266.jpg)

4.5 BUY NOW PAGE
Registered users can order desired products from here.
![Add to Card](https://user-images.githubusercontent.com/46102435/72818243-282a3280-3c91-11ea-8de6-9434ca4821a5.jpg)

4.6 EDIT PROFILE PAGE
People who want to update their profile they can do that using this page.
![Edit Profile](https://user-images.githubusercontent.com/46102435/72818246-28c2c900-3c91-11ea-9797-81cc6382da4e.jpg)

4.7 PURCHASE HISTORY PAGE 
Purchased history will display in this page
![Perchase History](https://user-images.githubusercontent.com/46102435/72818249-295b5f80-3c91-11ea-825d-7593c5cf6ffe.jpg)

4.8 ACCOUNT DETAILS PAGE
Users account details will display in this page.
![Account Details](https://user-images.githubusercontent.com/46102435/72818240-27919c00-3c91-11ea-89af-251267c331ff.jpg)

4.9 ADD ITEMS PAGE
Sellers can add items through this page and they can also update and delete that items.
![Add New Items](https://user-images.githubusercontent.com/46102435/72818241-282a3280-3c91-11ea-8ddd-9d894f582c7c.jpg)

5.	 Data Management
5.1 Data Description

# This database consists of 
-	Users: User and Admin information is added to database with Unique ID based on their roles. 
-	Shopping: Complete products information is stored in this table. 
-	Orders: Customer ordered products, status and delivery information is stored in this table.

5.2 Data Objects

- `perchase_history`(`it_code`, `it_name`, `it_qty`, `it_amount`, `it_date`, `u_id`, `p_id`)
- `subscribers_details`(`id`, `name`, `email`)
- `users`(`u_id`, `u_email`, `u_password`, `status`)
- `users_details`(`u_id`, `u_fname`, `u_lname`, `u_addressl1`, `u_addressl2`, `u_city`, `u_province`, `u_postalcode`, `u_country`, `u_contactno`, `u_category`)
- `account_details`(`u_id`, `pay_method`, `bank_name`, `account_no`, `card_no`, `security_code`, `expiration`)
- `items_details`(`it_code`, `it_name`, `it_qty`, `it_price`, `it_upprice`, `it_color`, `it_img1`, `it_img2`, `it_img3`, `it_img4`, `it_description`, `it_rating`, `it_category`, `it_sold`, `u_id`)

5.3 Database Table Diagram

- Database_Tables
![Database_Tables](https://user-images.githubusercontent.com/46102435/72820932-c7e9bf80-3c95-11ea-8d1f-df0c6991941b.PNG)

- Perchase_Details
![Perchase_Details](https://user-images.githubusercontent.com/46102435/72820934-c8825600-3c95-11ea-97b1-bfc981862e1b.PNG)

- Subscribers_Details
![Subscribers_Details](https://user-images.githubusercontent.com/46102435/72821062-f8315e00-3c95-11ea-8af1-f242580c9afe.PNG)

- Users_Details_01
![Users_Details_01](https://user-images.githubusercontent.com/46102435/72820936-c91aec80-3c95-11ea-8eed-6a8874bacb53.PNG)

- Users_Details_02
![Users_Details_02](https://user-images.githubusercontent.com/46102435/72820938-c91aec80-3c95-11ea-9151-b838102cf750.PNG)

- Account_Details
![Account_Details](https://user-images.githubusercontent.com/46102435/72820931-c7e9bf80-3c95-11ea-8a45-54f450d88046.PNG)

- Items_Details
![Items_Details](https://user-images.githubusercontent.com/46102435/72820933-c8825600-3c95-11ea-9780-72f1d7539a47.PNG)

# 6.	 Non-Functional / Operational Requirements 

6.1 Security 

-	Pages of the website must be access in the way they were intended to be accessed. Included files shall not be accessed outside of their parent file. 
-	Administrator can only perform administrative task on pages they are privileged to access. Customers will not be allowed to access the administrator pages. 

6.2 Efficiency and Maintainability 

-	Page loads should be returned and formatted in a timely fashion depending on the request being made. 
-	Administrators will have the ability to edit the aspects of the order forms, product descriptions, prices and website directly.

