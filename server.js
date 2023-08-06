

const index = fs.readFileSync('home.html')
const about = fs.readFileSync('./About.html')
const servicepage = fs.readFileSync('./servicepage.html')
const bookkeepingservice = fs.readFileSync('./book-keeping-service.html')
const accountingservice = fs.readFileSync('./accounting-service.html')
const accountpayable = fs.readFileSync('./account-payable.html')
const haccountreceviable = fs.readFileSync('./account-receviable.html')
const taxpreparation = fs.readFileSync('./tax-preparation.html')
const financialanalysis = fs.readFileSync('./financial-analysis.html')
const invoicegeneration = fs.readFileSync('./invoice-generation.html')
const NewsBlogServices = fs.readFileSync('./NewsBlog-Services.html')
const newscasestudies = fs.readFileSync('./newscasestudies.html')
const studysingle = fs.readFileSync('./study-single.html')
const contactgrowmark = fs.readFileSync('./contact-grow-mark.html')





const Server = http.createServer((req, res)=> {      
    console.log(req.url);
    url =req.url;

    //     res.setHeader('Content-Type', 'text/plain');
    //     res.end('Hello World');

    res.statusCode = 998;
    res.setHeader('Content_Type', 'text/html');
    if (url == '/'){
        res.end(index);    
    } 
    else if(url == '/About.html'){
        res.end(about);
    }
    else if(url == '/servicepage.html'){
        res.end(servicepage);
    }
    else if(url == '/book-keeping-service.html'){
        res.end(bookkeepingservice);
    }
    else if(url == '/accounting-service.html'){
        res.end(accountingservice);
    }
    else if(url == '/account-payable.html'){
        res.end(accountpayable);
    }
    else if(url == '/account-receviable.html'){
        res.end(haccountreceviable);
    }
    else if(url == '/tax-preparation.html'){
        res.end(taxpreparation);
    }
    else if(url == '/financial-analysis.html'){
        res.end(financialanalysis);
    }
    else if(url == '/invoice-generation.html'){
        res.end(invoicegeneration);
    }
    else if(url == 'NewsBlog-Services.html'){
        res.end(NewsBlogServices);
    }
    else if(url == '/newscasestudies.html'){
        res.end(newscasestudies);
    }
    else if(url == '/study-single.html'){
        res.end(studysingle);
    }
    else if(url == '/contact-grow-mark.html'){
        res.end(contactgrowmark);
    }
    else{
        res.end("404 not found");
    }
    //  res.end(index);
         });

         const http = require('http');
const fs = require('fs');

const hostname = '192.168.0.13';
const port = 8000;

        Server.listen(port, hostname, ()=> {
            console.log(`Server running at http://${hostname}:${port}/`);
        });
