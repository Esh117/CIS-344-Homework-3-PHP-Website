🚗 AutoZone Plus

\Your One-Stop Shop for Auto Parts!


</p>



\---



\📌 Homework Overview



\*\*AutoZone Plus\*\* is a simple automotive parts store website developed using PHP, HTML, and CSS.



The purpose of this project is to demonstrate how PHP can be used to organize a website into reusable components by separating the header and footer into individual PHP files.



Instead of writing the same header and footer code on every webpage, PHP's `include` function allows these components to be reused throughout the website.



This project was created as part of a PHP Chapter 5 assignment.



\🎯 Homework Objectives



\- Create a functional PHP webpage.

\- Separate the website header and footer into individual files.

\- Use PHP `include` statements to reuse website components.

\- Apply CSS styling to improve the website's appearance.

\- Organize files using a clean project structure.



\✨ Features



| Feature | Description |

|---|---|

| 🏠 Homepage | Welcoming introduction to AutoZone Plus |

| 🧭 Navigation Bar | Links to different website sections |

| 🔋 Product Listings | Displays automotive products and prices |

| ℹ️ About Us | Provides information about the store |

| 📞 Contact Section | Displays contact information |

| 🎨 CSS Styling | Custom colors, layouts, and styling |

| ♻️ Reusable Components | Separate PHP header and footer files |



\🛠️ Technologies Used



\- \*\*PHP:\*\* Handles the reusable header and footer components.

\- \*\*HTML5:\*\* Structures the webpage and its content.

\- \*\*CSS3:\*\* Provides styling, colors, and layout.

\- \*\*XAMPP:\*\* Local development environment for running PHP.

\- \*\*GitHub:\*\* Stores and manages the project files.



\📂 Homework Structure



```text

AutoZonePlus/

│

├── header.php

│   └── Website header, navigation, and CSS

│

├── index.php

│   └── Main homepage and product information

│

├── footer.php

│   └── Website footer and contact information

│

├── screenshots/

│   └── Website screenshots

│

├── README.md

│   └── Homework documentation

│

├── .gitignore

│   └── Files excluded from GitHub

│

└── LICENSE

&#x20;   └── Homework license

```



\🚀 How to Run the PHP Website



Follow these instructions to run AutoZone Plus on your computer.



\Step 1: Install XAMPP



Download and install XAMPP:



https://www.apachefriends.org/



\Step 2: Start Apache



1\. Open the XAMPP Control Panel.

2\. Find Apache.

3\. Click Start.



\Step 3: Download the Homework Files



Clone the repository using Git:



```bash

git clone https://github.com/YOUR-USERNAME/AutoZonePlus.git

```



Alternatively, download the repository as a ZIP file from GitHub.



\Step 4: Move the Files



Place the AutoZonePlus folder inside your XAMPP `htdocs` directory.



Example:



```text

C:\\xampp\\htdocs\\AutoZonePlus

```



\Step 5: Open the Website



Open your web browser and visit:



```text

http://localhost/AutoZonePlus/index.php

```



You should now be able to view the AutoZone Plus homepage.



\## 🧩 How PHP Include Works



One of the main concepts demonstrated in this project is PHP's `include` function.



The `index.php` file includes the header:



```php

<?php

include 'header.php';

?>

```



The main page then includes the footer:



```php

<?php

include 'footer.php';

?>

```



This allows the header and footer to be reused without duplicating the same code across multiple webpages.





\📚 Learning Outcomes



Through this assigment, I practiced:



\- Creating and organizing PHP files.

\- Understanding PHP include statements.

\- Separating reusable website components.

\- Building a basic webpage using HTML.

\- Applying CSS to improve website presentation.

\- Running PHP projects using XAMPP.

\- Managing and uploading project files using GitHub.



\👨‍💻 Author



\*\*Eshwar Basdeo\*\*



PHP Chapter 5 Assignment



GitHub: https://github.com/YOUR-USERNAME



\---



<p align="center">

&#x20; \*\*AutoZone Plus\*\*

&#x20; 

&#x20; \*Keeping Your Vehicle Running Smoothly!\*

&#x20; 

&#x20; © 2026 AutoZone Plus. All Rights Reserved.

</p>

