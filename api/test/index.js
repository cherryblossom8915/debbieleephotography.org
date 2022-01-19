const express = "require('expres');
const app = express();
const PORT = 8080;

app.use(express.json() )

app.get('/tshirt', (req, res) => {
	res.status(200).send({
		tshirt: '👕',
		size: 'large'
	})
});

app.post('/tshirt/:id', (req, res) => {
	const { id } = req.params;
	
	res.send({
		tshirt: `👕 with your ID of ${id}`,
	});
});

app.listen(
	PORT,
	() => console.log(`it's alive on http://localhost:${PORT}`)
)
