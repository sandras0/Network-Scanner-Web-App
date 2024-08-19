# Network-Scanner-Web-App

The Network-Scanner-Web-App Project is a web-based tool designed to perform network scans via a simple and intuitive interface. This project leverages the power of Nmap, PHP, and Apache2 to allow users to quickly and efficiently scan IP addresses or ranges for open ports and running services.

# Technologies Used

    PHP: Backend scripting language to handle user input and interface with Nmap.
    Apache2: Web server used to serve the web application.
    Nmap: Network scanning tool for detecting open ports and services.
    Crontab: Task scheduling tool for automating periodic scans.

# Installation

   - Make sure you have the following dependencies installed:
     
**Update your package list**:
  ```bash
  sudo apt-get update
  sudo apt-get upgrade
  ```
**Apache2**:
  ```bash
  sudo apt-get install apache2
  ```
**nmap**:
  ```bash
  sudo apt-get install nmap
  ```
 **php**:
  ```bash
 sudo apt-get install php
  ```
- Configure the ownership and permission for Apache Web Server: 
     
  ```bash
    sudo chown <your_username> /var/www/html
    sudo chmod 777 /var/www/html
  ```
- Move the project files to the Apache web server's root directory: 
     
  ```bash
    sudo mv network_scanner /var/www/html/
  ```
- Open the crontab editor: 
     
  ```bash
    sudo crontab -e
  ```
- Add the following line to the file to run the Nmap scan every 10 minutes: 
     
  ```bash
    */10 * * * * nmap <your-ip-address> -oN /var/www/html/nmap.html
  ```
- Access the web interface by navigating to http://your_server/network.php/ in your web browser
     
  
