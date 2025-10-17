postMessage.test("Status code is 200", function () {
    postMessage.response.to.have.status(200);
});

postMessage.test("Each article has required fields", function () {
    const jsonData = postMessage.response.json();
    jsonData.articles.forEach(article => {
        postMessage.expect(article).to.have.property("title");
        postMessage.expect(article).to.have.property("description");
        postMessage.expect(article).to.have.property("url");
    });
});
