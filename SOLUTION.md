
## The Exploit

To exploit the vulnerability, the attacker sends a request with the following characteristics:
1. **Conflicting headers**: The attacker includes both `Content-Length` and `Transfer-Encoding` headers in the request.
 - The `Content-Length: 5` header tells the proxy that the request body is 5 bytes long.
 - The `Transfer-Encoding: chunked` header allows the body to be sent in chunks.
 
 Because these two headers conflict, the proxy misinterprets the body length and forwards part of the body, while the backend server sees additional data that it processes as a separate request.

2. **Payload**: 
 ```plaintext
 POST / HTTP/1.1
 Content-Length: 5
 Transfer-Encoding: chunked

 0

 EXTRA_PAYLOAD
