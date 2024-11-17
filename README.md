# Simple HTTP Request Smuggling Lab

This is a simple lab to demonstrate the **HTTP Request Smuggling** vulnerability.

## Lab Overview

In this lab, you will:
- Input an HTTP request payload into a form.
- The request is forwarded through a vulnerable proxy that misinterprets headers.
- The backend server processes the smuggled request and responds accordingly.

If the request is smuggled successfully, you'll see a **success message** from the backend server.

## Setup Instructions

Follow these steps to run the lab locally:

1. **Clone this repository**:
   ```bash
   git clone https://github.com/talhatariqsec/HTTP-Request-Smuggling-Lab.git
   cd HTTP-Request-Smuggling-Lab 
2. Open a terminal in the lab directory and run the proxy server:

   ```bash
   php -S localhost:8000
3. Open your browser and navigate to http://localhost:8000 to access the lab.
