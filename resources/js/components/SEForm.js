import React from 'react';
import ReactDOM from 'react-dom';
import Container from "@material-ui/core/Container";
import Grid from "@material-ui/core/Grid";
import TextField from '@material-ui/core/TextField';
import Button from '@material-ui/core/Button';
import Link from '@material-ui/core/Link';

function SEForm() {
    return (
        <form action="/form-submit" method="post" id="prefill-form">
            <Container maxWidth="sm">
                <h1>Please pre-fill these data</h1>
                <Grid container spacing={3}>
                    <Grid item xs={12}>
                        <Link href="/template"> Document Example </Link>
                    </Grid>
                    <Grid item xs={12}>
                        <TextField label="Owner Name" name="owner_name"/>
                        <TextField label="Owner Title" name="owner_title"/>
                    </Grid>
                    <Grid item xs={12}>
                        <TextField label="Approver Name" name="approver_name"/>
                        <TextField label="Approver Title" name="approver_title"/>
                    </Grid>
                    <Grid item xs={12}>
                        <TextField label="Reviewer Name" name="reviewer_name"/>
                        <TextField label="Reviewer Title" name="reviewer_title"/>
                    </Grid>
                    <Grid item xs={12}>
                        <TextField label="Interval" name="interval"/>
                    </Grid>
                    <Grid item xs={12}>
                        <TextField label="Audience" name="audience"/>
                    </Grid>
                    <Grid item xs={12}>
                        <TextField label="Name" name="name"/>
                    </Grid>
                    <Grid item xs={12}>
                        <Button type="submit" variant="contained" color="primary"> Generate Document </Button>
                    </Grid>
                </Grid>
            </Container>
        </form>

    );
}

export default SEForm;

if (document.getElementById('se-form')) {
    ReactDOM.render(<SEForm/>, document.getElementById('se-form'));
}
