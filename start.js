Parse.initialize("ID1", "ID2");

        var TestObject = Parse.Object.extend("Class");
        var testObject = new TestObject();
        testObject.save({Text: "Hi"}, {
            success: function(object) {
                alert("done");
            },
            error: function(model, error) {
                alert("error");
            }
        });
        