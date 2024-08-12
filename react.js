
// const style = {
// 	backgroundColor: 'orange',
// 	fontFamily: 'verdana',
// 	color: 'white'
// }


// const title = React.createElement(
// 'h1',
// {id: 'title', className: 'header', style: style},
// 'Hello World' 
// 	)


// ReactDOM.render(
// <h1 id='title' className='header' style={{backgroundColor: 'orange', fontFamily: 'verdana', color: 'white'}}>Hello World</h1>,
// document.getElementById('container')
// 	)


class shoppingList extends React.Component {
	render() {
		return (
				<div className="shopping-list">
					<h1>Shopping List for {this.props.name}</h1>
					<ul>
						<li>Instagram</li>
						<li>Whatsapp</li>
						<li>Oculus</li>
					</ul>
				</div>
			);
	}
}